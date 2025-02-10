<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class SendEmail extends Controller
{
    private $uploadPath = WRITEPATH . 'uploads/contact';
    public function __construct()
    {
        // Check if the folder exists, if not, create it
        if (!is_dir($this->uploadPath)) {
            // Create the directory with 0777 permissions (read/write/execute for everyone)
            if (!mkdir($this->uploadPath, 0777, true)) {
                echo "Failed to create folder!";
                return;
            }
        }
    }
    public function submit()
    {

        $rules = $this->getRules();

        if ($this->request->getPost('wantsToBeDistributor') == "true") {

            $rules['taxName'] = 'required';
            $rules['rfc'] = 'required';
            $rules['regimen'] = 'required';

            $rules['taxEmail'] = 'required';
            $rules['businessActivity'] = 'required';
            $rules['zipCode'] = 'required';
            $rules['regimen'] = 'required';
            $rules['regimen'] = 'required';


            // $rules['ineFile'] = 'uploaded[file]|max_size[file,10240]';
            // $rules['tickedFile'] = 'uploaded[file]|max_size[file,10240]';
            // $rules['proofFile'] = 'uploaded[file]|max_size[file,10240]';
            //'file' => 'uploaded[file]|max_size[file,10240]' /
        }


        $errors = $this->getErrors();

        if (!$this->validate($rules, $errors)) {
            // Handle failed validation and show custom error messages
            return  $this->response->setJSON(['errors' => $this->validator->getErrors(), 'distributor' => $this->request->getPost('wantsToBeDistributor')]);
        }

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $estado = $this->request->getPost('estado');
        $wantsToBeDistributor = $this->request->getPost('wantsToBeDistributor');
        $taxName = $this->request->getPost('taxName');
        $rfc = $this->request->getPost('rfc');
        $regimen = $this->request->getPost('regimen');
        $taxEmail = $this->request->getPost('taxEmail');
        $comercialName = $this->request->getPost('comercialName');
        $businessActivity = $this->request->getPost('businessActivity');
        $address = $this->request->getPost('address');
        $neighborhood = $this->request->getPost('neighborhood');
        $zipCode = $this->request->getPost('zipCode');
        $estado2 = $this->request->getPost('estado2');
        $town = $this->request->getPost('town');

        $ineFile = $this->request->getFile('ineFile');
        $tickedFile = $this->request->getFile('tickedFile');
        $proofFile = $this->request->getFile('proofFile');
        //$___ = $this->request->getPost('___');

        $distributor = ($wantsToBeDistributor == true) ? 'Si' : 'No';
        $message = "
            <h1>Datos de Contacto</h1>
            Nombre: $name <br/>
            Teléfono: $phone <br/>
            Correo Electrónico: $email <br/>
            Estado: $estado <br/>
            Ser Distribuidor:  $distributor <br/>

           
        ";

        $targetEmail = $this->getEmailByRegion($estado);

        if ($distributor  == true) {
            $message .= "
            <h2>Datos de Distribuidor</h2>
            Razón Social: $taxName  <br/>
            RFC: $rfc <br/>
            Régimen Fiscal: $regimen <br/>
            Correo Fiscal: $taxEmail  <br/>
            Nombre Comercial: $comercialName  <br/>
            Giro o Actividad: $businessActivity  <br/>

            <h2>Datos de Dirección</h2>
            Dirección: $address  <br/>
            Colonia: $neighborhood  <br/>
            Código Postal: $zipCode   <br/>
            Estado: $estado2   <br/>
            Municipio: $town  <br/>
            ";
        }

        //$message .= $targetEmail;

        // Create an instance of the Email class
        $emailService = \Config\Services::email();;
        // Dynamically load email config from .env
        $config = [
            'protocol'    => 'smtp',
            'SMTPHost'    => getenv('SMTP_HOST'),  // Fetching SMTP host from .env file
            'SMTPUser'    => getenv('SMTP_USER'),
            'SMTPPass'    => getenv('SMTP_PASS'),
            'SMTPPort'    => (int) getenv('SMTP_PORT') ?: 465, // Fallback to 587 if not found
            'SMTPCrypto'  => getenv('SMTP_CRYPTO') ?: 'ssl', // Default to TLS
            'mailType'    => 'html',
            'charset'     => 'UTF-8',
            'wordWrap'    => true,
            'newline'     => "\r\n",
        ];

        // Initialize email service with the new config
        $emailService->initialize($config);

        // Set email configurations (overwrite default ones)
        $emailService->setFrom(getenv('FROM_EMAIL'), getenv('FROM_NAME'));
        $emailService->setTo($targetEmail);
        $emailService->setSubject('Contacto desde pagina Massive Home');
        $emailService->setMessage($message);
        if ($distributor  == true) {
            // Attach the file to the email

            if ($ineFile && $ineFile->isValid() && !$ineFile->hasMoved()) {
                // Move the uploaded file to the 'uploads' directory
                $ineFile->move($this->uploadPath);
                $ineFilePath = $this->uploadPath . '/' . $ineFile->getName();
                $emailService->attach($ineFilePath);
            }


            if ($tickedFile && $tickedFile->isValid() && !$tickedFile->hasMoved()) {
                // Move the uploaded file to the 'uploads' directory
                $tickedFile->move($this->uploadPath);
                $tickedFilePath = $this->uploadPath . '/' . $tickedFile->getName();
                $emailService->attach($tickedFilePath);
            }

            if ($proofFile && $proofFile->isValid() && !$proofFile->hasMoved()) {
                // Move the uploaded file to the 'uploads' directory
                $proofFile->move($this->uploadPath);
                $proofFilePath = $this->uploadPath . '/' . $proofFile->getName();
                $emailService->attach($proofFilePath);
            }
        }


        // Send the email
        if ($emailService->send()) {
            if ($this->request->getPost('wantsToBeDistributor') == "true") {
                unlink($this->uploadPath . '/' . $ineFile->getName());
                unlink($this->uploadPath . '/' . $tickedFile->getName());
                unlink($this->uploadPath . '/' . $proofFile->getName());
            }

            session()->setFlashdata('message', 'E-mail enviado con éxito, nuestros asesores se comunicaran con usted en la brevedad!');
            return redirect()->back();
            //echo 'Email sent successfully!';
        } else {
            echo 'Email failed to send!';
            session()->setFlashdata('messageError', 'Error inesperado al enviar correo, intente mas tarde!');
            // Debugging: print detailed error messages
            //echo $emailService->printDebugger();
        }
    }
    private function getRules(): array
    {
        return [
            'name'  => 'required|min_length[3]|max_length[250]',
            'email' => 'required|valid_email',
            'phone' => 'required',
            'estado' => 'required',
        ];
    }
    private function getErrors(): array
    {
        return
            [
                'name' => [
                    'required' => 'The name field is mandatory.',
                    'min_length' => 'The name must be at least 3 characters long.'
                ],
                'email' => [
                    'required' => 'The email field is required.',
                    'valid_email' => 'Please enter a valid email address.'
                ],
                'phone' => [
                    'required' => 'The email field is required.',
                    //'valid_email' => 'Please enter a valid email address.'
                ],
                'estado' => [
                    'required' => 'The email field is required.',
                    //'valid_email' => 'Please enter a valid email address.'
                ],
                'taxName' => [
                    'required' => 'The taxName field is required.',
                    //'valid_email' => 'Please enter a valid email address.'
                ]
            ];
    }
    private function getEmailByRegion($region)
    {
        $NorthwestEmail = "ventas13@massivehome.com.mx";
        $Northwest = array(
            'Baja California',
            'Baja California Sur',
            'Colima',
            'Jalisco',
            'Nayarit',
            'Sinaloa',
            'Sonora',
        );

        $NorthEmail = "karina.cordero@linkbits.online";
        $North = array(
            'Chihuahua',
            'Durango',
            'Nuevo León',
            'San Luis Potosí',
            'Tamaulipas',
            'Zacatecas',
            'Coahuila',
        );

        $CenterEmail = "adriana.aviles@linkbits.online";
        $Center = array(
            'Hidalgo',
            'Ciudad de México',
            'Estado de México',
            'Guanajuato',
            'Morelos',
            'Querétaro',
            'Michoacán',
            'Aguascalientes',
            'Puebla',
            'Tlaxcala',
        );

        $SuresteEmail = "marco.zamoratey1@megaluz.online";
        $Sureste  = array(
            'Campeche',
            'Yucatán',
            'Quintana Roo',
            'Chiapas',
            'Guerrero',
            'Oaxaca',
            'Tabasco',
            'Veracruz',
        );

        if (in_array($region, $Northwest)) return $NorthwestEmail;
        if (in_array($region, $North)) return $NorthEmail;
        if (in_array($region, $Center)) return $CenterEmail;
        if (in_array($region, $Sureste)) return $SuresteEmail;


        // DEFAULT EMAIL
        return $NorthwestEmail;
    }
}

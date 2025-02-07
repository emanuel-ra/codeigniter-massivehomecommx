<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function __construct() {}
    public function index(): string
    {
        try {
            return view('contact', [
                'branches' => $this->getBranches()
            ]);
        } catch (\Exception $e) {
            // Log the error message
            log_message('error', $e->getMessage());
            // Display the error message
            echo 'Error: ' . $e->getMessage();
            return '';
        }
    }

    private function getBranches(): array
    {
        return [
            [
                'name' => 'Sucursal Mariano Otero',
                'address' => 'Av. Mariano Otero 411, Colonia la Moderna, Entre calle Chapultepec y Marsella, Guadalajara, Jalisco, México.',
                'phone' => '+521 33 1777-0453',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Guadalajara Centro',
                'address' => 'Av. Ramón Corona No. 148 Esq. López Cotilla. Entre López Cotilla y Av. Juárez. (A una cuadra de la plaza de la tecnología.), Código Postal 44100 Guadalajara, Jalisco, México',
                'phone' => '+521 33 2957-6654',
                'email' => 'ventas@massivehome.com.mx'
            ],
            [
                'name' => 'Sucursal San Juan de Dios',
                'address' => 'Dionisio Rodriguez No. 226, Colonia San Juan de Dios, Guadalajara, Jalisco, México',
                'phone' => '+521 33 1429 9663',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Cabañas',
                'address' => 'Dionisio Rodriguez No. 147 J. Colonia San Juan de Dios. Guadalajara, Jalisco, México. (A un costado del Hospicio Cabañas).',
                'phone' => '+521 33 1572 8560',
                'email' => ''
            ],
            [
                'name' => 'Niños Heroes',
                'address' => 'Av Niños Héroes 1798. Colonia Americana, Guadalajara, Jalisco, México.',
                'phone' => '+521 33 1749 4203',
                'email' => ''
            ],
            [
                'name' => 'Monterrey centro',
                'address' => 'Av. Benito Juarez Sur #237, Monterrey centro, Monterrey, Nuevo León, México',
                'phone' => '+521 81 1620 4928',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Arcos de Belén',
                'address' => 'Av Arcos de Belén 22, Doctores, Cuauhtémoc, 06720 Ciudad de México, CDMX',
                'phone' => '',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Argentina',
                'address' => 'República de Argentina 96, Lagunilla, Centro-Área 3 Cuauhtémoc, 06020 Ciudad de México, CDMX',
                'phone' => '',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Corregidores #1',
                'address' => 'Jesús María 52, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06060 Ciudad de México, CDMX',
                'phone' => '',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Corregidores #2',
                'address' => 'Corregidora # 72-Local B - 91 And 92, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06060 Ciudad de México, CDMX',
                'phone' => '',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Mesones',
                'address' => 'Calle de Mesones 34, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06080 Centro, CDMX',
                'phone' => '',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Florida',
                'address' => 'Florida 9 Sótano, Centro, Cuauhtémoc, 06020 Ciudad de México, CDMX',
                'phone' => '',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Izazaga',
                'address' => 'José María Izazaga 34, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06080 Centro, CDMX',
                'phone' => '',
                'email' => ''
            ],
            [
                'name' => 'Sucursal Uruguay',
                'address' => 'República de Uruguay 20, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06000, CDMX',
                'phone' => '',
                'email' => ''
            ]
            // [
            //     'name' => 'Sucursal 1',
            //     'address' => 'Calle 1 #123, Colonia 1, Ciudad 1, Estado 1, C.P. 12345',
            //     'phone' => '123 456 7890',
            //     'email' => ''
            // ]
        ];
    }
}

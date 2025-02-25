<?php

namespace App\Controllers;

class Home extends BaseController
{

    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
        try {
            $carrouselItems = $this->db->query('SELECT img FROM itemsCarousel WHERE statusId = 1 AND CarouselName = "FIRST" ORDER BY iOrden ASC ');

            $products = $this->db->query('SELECT id, product_code,product_code2,nameProduct,Img,ImgWebp FROM products WHERE statusId = 1 AND Img != \'\' ORDER BY RAND() LIMIT 12 ');
            //$products = $this->db->query('SELECT id, product_code,product_code2,nameProduct,Img FROM products WHERE statusId = 1 AND Img != \'\' LIMIT 16 ');

            $data['carrouselItems'] = $carrouselItems->getResult();
            $data['products'] = $products->getResult();
            $data['catalogs'] = $this->getCatalogs();
            return view('home', $data);
        } catch (\Exception $e) {
            // Log the error message
            log_message('error', $e->getMessage());
            // Display the error message
            echo 'Error: ' . $e->getMessage();
            return '';
        }
    }
    private function getCatalogs()
    {
        return array(
            array(
                'name' => 'Catalogo de Iluminación LED',
                'img' => 'assets/images/catalogo-iluminacion-led-2024.webp',
                'url' => 'pdf/iluminacion-led'
            ),
            array(
                'name' => 'Catalogo de Ventiladores de Techo',
                'img' => 'assets/images/catalogo-ventiladores-de-techo-2024.webp',
                'url' => 'pdf/ventiladores-de-techo'
            ),
            array(
                'name' => 'Catalogo de Candiles',
                'img' => 'assets/images/catalogo-candiles-2024.webp',
                'url' => 'pdf/candiles'
            ),
            // array(
            //     'name' => 'Gadgets',
            //     'img' => 'assets/images/catalogs/gadgets.webp',
            //     'url' => 'gadgets'
            // ),
        );
    }
}

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
            $carrouselItems = $this->db->query('SELECT img FROM itemscarousel WHERE statusId = 1 AND CarouselName = "FIRST" ORDER BY iOrden ASC ');
            $products = $this->db->query('SELECT id, product_code,product_code2,nameProduct,Img FROM products WHERE statusId = 1 AND Img != \'\' LIMIT 16 ');

            $data['carrouselItems'] = $carrouselItems->getResult();
            $data['products'] = $products->getResult();
            return view('home', $data);
        } catch (\Exception $e) {
            // Log the error message
            log_message('error', $e->getMessage());
            // Display the error message
            echo 'Error: ' . $e->getMessage();
            return '';
        }
    }
}

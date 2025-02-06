<?php

namespace App\Controllers;

class Product extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index($id)
    {
        //statusId = 1 AND
        $product = $this->db->query('SELECT * FROM products WHERE  id = ' . $id)->getResult();

        if (empty($product)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product with ID ' . $id . ' not found.');
        }

        $gallery = $this->db->query("SELECT img FROM galleryProducts WHERE productId = $id LIMIT 3")->getResult();

        return view('product', ['product' => $product, 'gallery' => $gallery]);
    }
}

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

        $product = $this->db->query('SELECT * FROM products WHERE statusId = 1 AND id = ' . $id)->getResult();

        if (empty($product)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product with ID ' . $id . ' not found.');
        }

        $gallery = $this->db->query('SELECT img FROM galleryproducts WHERE productId = ' . $id)->getResult();

        return view('product', ['product' => $product, 'gallery' => $gallery]);
    }
}

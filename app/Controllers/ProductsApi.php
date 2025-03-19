<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class ProductsApi extends ResourceController
{
    protected $modelName = 'App\Models\ProductModel';
    protected $format    = 'json';

    public function index()
    {
        //$products = $this->model->findAll();
        $model = new \App\Models\ProductModel();
        $products = $model->where('statusId', 1)->findAll();

        return  $this->respond($products);
    }
}

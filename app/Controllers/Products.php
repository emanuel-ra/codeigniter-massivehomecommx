<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        $search = $this->request->getGet('search');

        $pager = \Config\Services::pager();
        $model = new \App\Models\ProductModel();

        $model->where('statusId', 1);
        if ($search) {
            $model->groupStart()
                ->like('product_code2', $search)
                ->orLike('nameProduct', $search)
                ->groupEnd();
        }

        $data = [
            'products' => $model->paginate(10),
            'pager' => $model->pager
        ];
        return view('products', $data);
    }
}

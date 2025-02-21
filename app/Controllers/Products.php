<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        $search = $this->request->getGet('search');
        $categoryIds = $this->request->getGet('category');

        $pager = \Config\Services::pager();
        $model = new \App\Models\ProductModel();

        $model->where('statusId', 1);
        if ($search) {
            $model->groupStart()
                ->like('product_code2', $search)
                ->orLike('nameProduct', $search)
                ->groupEnd();
        }


        if (is_array($categoryIds)) {
            $model->whereIn('id', function ($builder) use ($categoryIds) {
                $builder->select('idProducto')
                    ->from('relCategoriasProductos')
                    ->whereIn('idCategoria', $categoryIds);
            });
        }

        $categories = $this->getCategories();
        $data = [
            'products' => $model->paginate(10),
            'pager' => $model->pager,
            'categories' => $categories,
            "search" => $search,
            "selectedCategoryIds" => $categoryIds
        ];
        return view('products', $data);
    }
    private function getCategories(): array
    {
        $model = new \App\Models\CategoryModel();
        $model->where('statusId', 1);
        return $model->where('statusId', 1)->findAll();
    }
}

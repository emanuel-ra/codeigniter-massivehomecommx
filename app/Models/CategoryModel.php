<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categoryProducts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['categoryId', 'categoryName', 'statusId'];

    // Optionally, you can add validation rules
    protected $validationRules = [
        'categoryName' => 'required|min_length[3]|max_length[255]',
    ];

    // Optionally, you can add custom methods for your model
    public function getCategories()
    {
        return $this->findAll();
    }

    public function getCategoryById($id)
    {
        return $this->find($id);
    }
}

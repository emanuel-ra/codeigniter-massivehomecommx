<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'ImgWebp', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    // Optional: Define validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        // 'description' => 'required',
        //'price' => 'required|decimal'
    ];

    // Optional: Define validation messages
    protected $validationMessages = [
        'name' => [
            'required' => 'Product name is required',
            'min_length' => 'Product name must be at least 3 characters long',
            'max_length' => 'Product name cannot exceed 255 characters'
        ],
        // 'description' => [
        //     'required' => 'Product description is required'
        // ],
        // 'price' => [
        //     'required' => 'Product price is required',
        //     'decimal' => 'Product price must be a valid decimal number'
        // ]
    ];
}

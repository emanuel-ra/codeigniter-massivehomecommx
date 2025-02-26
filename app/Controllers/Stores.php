<?php

namespace App\Controllers;


class Stores extends BaseController
{
    public function index()
    {

        $data['locations'] = array();

        echo view('stores', $data);
    }
}

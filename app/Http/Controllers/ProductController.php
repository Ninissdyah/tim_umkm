<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pemilikUMKM.product');
    }

    public function create()
    {
        return view('form-input.form-product');
    }
}

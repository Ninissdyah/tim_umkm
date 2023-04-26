<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyStoreController extends Controller
{
    public function index()
    {
        return view('pemilikUMKM.my-store');
    }

    public function create()
    {
        return view('form-input.form-store-detail');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogUMKMController extends Controller
{
    public function index()
    {
        return view('pemilikUMKM.blog');
    }

    public function create()
    {
        return view('form-input.form-blog');
    }
}

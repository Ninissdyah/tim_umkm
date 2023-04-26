<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreAdminController extends Controller
{
    public function index()
    {
        return view('admins.store');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function view_kategori()
    {
        return view ('admin.kategori');
    }
    public function a_kategori()
    {
        return view ('admin.kategori');
    }
}

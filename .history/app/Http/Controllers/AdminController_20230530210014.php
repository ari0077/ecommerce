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
    public function add_kategori()
    {
        return view ('admin.kategori');
    }
}

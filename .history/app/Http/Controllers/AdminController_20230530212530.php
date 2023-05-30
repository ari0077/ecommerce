<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function view_kategori()
    {
        return view ('admin.kategori');
    }
    public function add_kategori(request $request)
    {
        $data=new Kategori;

        $data->nama_kat=$request->kategori;

        $data->save();
        return redirect()->back();
    }
}

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
        $data=kategori::all();
        return view ('admin.kategori', compact('data'));
    }
    public function add_kategori(request $request)
    {
        $data=new kategori;

        $data->nama_kategori=$request->kategori;
        

        $data->save();

        return redirect()->back()->with('message','kategori Added
        Succesfully');
    }
    public function view_product()
    {
        return view('admin.product');
    }

    public function add_product(request )
    {
        return view('admin.')
    }
}

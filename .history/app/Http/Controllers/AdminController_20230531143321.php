<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function view_catagory()
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
        $catagory=catagory::all();
        return view('admin.product', compact('catagory'));
    }

    public function add_product(request $request)
    {
        return view('admin.')
    }
}
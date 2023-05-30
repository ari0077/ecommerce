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
        $data=new kategori;

        $data->nama_kategori=$request->kategori;
        

        $data->save();
        
        return redirect()->back()->with('message','kategori Added
        Succesfully');
    }
}

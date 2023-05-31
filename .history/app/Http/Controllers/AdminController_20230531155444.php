<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function view_catagory()
    {
        $data=catagory::all();
        return view ('admin.catagory', compact('data'));
    }
    public function add_catagory(request $request)
    {
        $data=new catagory;

        $data->catagory_name=$request->catagory;
        

        $data->save();

        return redirect()->back()->with('message','catagory Added
        Succesfully');
    }
    public function view_product()
    {
        $catagory=catagory::all();
        return view('admin.product', compact('catagory'));
    }

    public function add_product(request $request)
    {
        $product=new product();
        return view('admin.');
    }
    public function delete_catagory($id)
    {
        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Catagory Delete sucessfully');
    }
}

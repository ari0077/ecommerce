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
        $product=new product;
        $product->title->$request->title;
        $product->description->$request->description;
        $product->price->$request->price;
        $product->quantity->$request->quantity;
        $product->discount_price->$request->dis_price;
        $product->catagory->$request->catagory;

        $image->$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save();

        return redirect()->back()->with('message', 'Product added sucesffuly');
    }
    public function delete_catagory($id)
    {
        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Catagory Delete sucessfully');
    }
    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product', compact('product'));
    }
    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();

        return redirect()->back()->with('message', 'Product delete success');
    }
    public function update_product($id)
    {
        $product=product::find($id);
        $catagory=catagory::all();
        return view('admin.update_product', compact('product','catagory'))
    }
    public function update_product_confirm(request $request,$id)
    {
        $product=product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->dis_pricee=$request->dis_price;
        $product->catagor=$request->catagory;
        $product->quantit=$request->quantity;

        $image=$request->image;

        $imagename=time.'.'.$image->getClientOriginalExtension();
        $request->$image->move('')


    }
}

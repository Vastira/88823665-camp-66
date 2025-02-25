<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductList;

class ProductController extends Controller
{
    //
    function index(){
        $cate = Categories::with('products')->get();
        return view('product', compact('cate'));
    }
    function store(Request $req){
        $category = new Categories();
        $category->name = $req->category_name;
        $category->save();

        foreach($req->product_name as $value){
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id;
            $product->save();
        }
        return redirect('/product');
    }
}

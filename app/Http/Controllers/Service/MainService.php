<?php

namespace App\Http\Controllers\Service;

use App\Models\Product;
use Illuminate\Http\Request;

class MainService
{

  public static function getAllProduct(){
    return Product::all();
  }

  public static function addProduct(Request $request){
     $product = new Product();
     $product-> product_name = $request->pname;
     $product-> product_description =$request->pdesc;
     $product-> stock= $request->qty;

     $product->save();

     return Product::all();
  }

   public static function updateProduct(Request $request){
    $product = Product::find($request->id);
    $product-> product_name = $request->pname;
    $product-> product_description =$request->pdesc;
    $product-> stock= $request->qty;

    $product->save();

    return Product::all();
   }

   public static function deleteProduct(Request $request){
    $product = Product::find($request->id);
    $product->save();

    return Product::all();
   }
}

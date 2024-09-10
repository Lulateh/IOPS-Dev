<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function addProduct(Request $request){
        $product = new Product();

        if($request->hasFile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img',$filename);
            $product->imagen_url = $filename;
        }
        
        $product -> nombre = $request -> productName;
        $product -> cantidad_stock = $request -> amount;
        $product -> marca = $request -> brand;
        $product -> precio = $request -> price;
        $product -> descripcion = $request -> details;
        $product -> proveedor_id = 1;
        $product -> save();

        return redirect(route('home'));
    }
}

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
        $product -> marca = $request -> brand;
        $product -> precio = $request -> price;
        $product -> descripcion = $request -> details;
        $product -> proveedor_id = 1;
        $product -> save();

        return redirect(route('home'));
    }

    public function showProduct($id){
        $existingProduct = Product::find($id);
        if($existingProduct){            
            return view('home.producto', compact('existingProduct', 'id'));            
        }else{
            return redirect(route('home')) -> with("error", "No se a encontrado el producto");
        }
        
    }

    public function redirectToEdit($id){
        $existingProduct = Product::find($id);
        if($existingProduct){            
            return view('home.edit', compact('existingProduct', 'id'));            
        }else{
            return redirect(route('home')) -> with("error", "No se a encontrado el producto");
        }
    }

    public function editProduct(Request $request, $id){
        $existingProduct = Product::find($id);
        $imagepath = "img/".$existingProduct->imagen_url;
        if(file_exists($imagepath) && $imagepath != "img/"){
            unlink($imagepath);
        }

        if($existingProduct){
            if($request->hasFile('img')){
                $file = $request->file('img');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('img',$filename);
                $existingProduct->imagen_url = $filename;
            }

            $existingProduct -> nombre = $request -> productName;
            $existingProduct -> marca = $request -> brand;
            $existingProduct -> precio = $request -> price;
            $existingProduct -> descripcion = $request -> details;
            $existingProduct -> save();
            return redirect(route('home'));
        }else{
            return redirect(route('home')) -> with("error", "Ha ocurrido un error");
        }
    }

    public function deleteProduct($id){
        $existingProduct = Product::find($id);
        if($existingProduct){
            $imagepath = "img/".$existingProduct->imagen_url;
            if(file_exists($imagepath)){
                unlink($imagepath);
            }
            $existingProduct->delete();
            return redirect(route('home'));
        }else{
            return redirect(route('home')) -> with("error", "Ha ocurrido un error");
        }
    }
}

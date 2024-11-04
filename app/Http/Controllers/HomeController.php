<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Proveedor;
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
        $product -> precio_venta = $request -> price_sale;
        $product -> precio_compra = $request -> price_income;
        $product -> descripcion = $request -> details;
        $product -> fecha_vencimiento = $request -> expiration;
        $product -> ubicacion_bodega = $request -> location;
        $product -> empresa_id = auth() -> user() -> empresa_id;
        $product -> save();

        return redirect(route('home'));
    }

    public function showProduct($id){
        $existingProduct = Product::find($id);
        $existingProveedor = Proveedor::find($existingProduct->proveedor_id);
        if($existingProduct){            
            return view('home.producto', compact('existingProduct', 'existingProveedor', 'id'));            
        }else{
            return redirect(route('home')) -> with("error", "No se a encontrado el producto");
        }
        
    }

    public function redirectToEdit($id){
        $existingProduct = Product::find($id);
        $existingProviders = Proveedor::all();
        if($existingProduct){            
            return view('home.edit', compact('existingProduct', 'existingProviders', 'id'));            
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
            $existingProduct -> precio_venta = $request -> price_sale;
            $existingProduct -> precio_compra = $request -> price_income;
            $existingProduct -> descripcion = $request -> details;
            $existingProduct -> ubicacion_bodega = $request -> location;
            $existingProduct -> fecha_vencimiento = $request -> expiration;
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

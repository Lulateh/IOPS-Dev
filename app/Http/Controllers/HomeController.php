<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function addProduct(Request $request){
        $validatedData = $request->validate([
            'productName' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price_sale' => 'required|numeric|min:0',
            'price_income' => 'required|numeric|min:0',
            'details' => 'nullable|string',
            'expiration' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'productName.required' => 'El nombre del producto es obligatorio.',
            'brand.required' => 'La marca es obligatoria.',
            'price_sale.required' => 'El precio de venta es obligatorio.',
            'price_sale.numeric' => 'El precio de venta debe ser un número.',
            'price_sale.min' => 'El precio de venta no puede ser menor que cero.',
            'price_income.required' => 'El precio de compra es obligatorio.',
            'price_income.numeric' => 'El precio de compra debe ser un número.',
            'price_income.min' => 'El precio de compra no puede ser menor que cero.',
            'img.image' => 'El archivo debe ser una imagen.',
            'img.mimes' => 'Solo se permiten imágenes en formato jpeg, png o jpg.',
            'img.max' => 'El tamaño máximo permitido para la imagen es de 2MB.',
        ]);

        
        if ($request->price_sale < $request->price_income) {
            return redirect()->back()->withErrors([
                'price_sale' => 'El precio de venta no puede ser menor que el precio de compra.',
            ]);
        }
        
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

    public function editProduct(Request $request, $id)
{
    $validatedData = $request->validate([
        'productName' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'price_sale' => 'required|numeric|min:0',
        'price_income' => 'required|numeric|min:0',
        'details' => 'nullable|string',
        'expiration' => 'nullable|date',
        'location' => 'nullable|string|max:255',
        'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ], [
        'productName.required' => 'El nombre del producto es obligatorio.',
        'brand.required' => 'La marca es obligatoria.',
        'price_sale.required' => 'El precio de venta es obligatorio.',
        'price_sale.numeric' => 'El precio de venta debe ser un número.',
        'price_sale.min' => 'El precio de venta no puede ser menor que cero.',
        'price_income.required' => 'El precio de compra es obligatorio.',
        'price_income.numeric' => 'El precio de compra debe ser un número.',
        'price_income.min' => 'El precio de compra no puede ser menor que cero.',
        'img.image' => 'El archivo debe ser una imagen.',
        'img.mimes' => 'Solo se permiten imágenes en formato jpeg, png o jpg.',
        'img.max' => 'El tamaño máximo permitido para la imagen es de 2MB.',
    ]);

    if ($request->price_sale < $request->price_income) {
        return redirect()->back()->withErrors([
            'price_sale' => 'El precio de venta no puede ser menor que el precio de compra.',
        ]);
    }

    try {
        $existingProduct = Product::find($id);

        if (!$existingProduct) {
            return redirect(route('home'))->with('error', 'Producto no encontrado.');
        }

        // Manejo de la imagen si existe
        if ($request->hasFile('img')) {
            $imagePath = "img/" . $existingProduct->imagen_url;

            // Eliminar imagen previa si existe
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }

            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img', $filename);
            $existingProduct->imagen_url = $filename;
        }

        // Actualizar los demás campos
        $existingProduct->nombre = $request->productName;
        $existingProduct->marca = $request->brand;
        $existingProduct->precio_venta = $request->price_sale;
        $existingProduct->precio_compra = $request->price_income;
        $existingProduct->descripcion = $request->details;
        $existingProduct->ubicacion_bodega = $request->location;
        $existingProduct->fecha_vencimiento = $request->expiration;
        $existingProduct->save();

        return redirect(route('home'))->with('success', 'Producto actualizado correctamente.');
    } catch (\Exception $e) {
        return redirect(route('home'))->with('error', 'Ocurrió un error al actualizar el producto. Por favor, inténtelo nuevamente.');
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

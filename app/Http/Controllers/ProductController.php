<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProductController extends Controller
{

    public function show(){
//        $paginate = Product::paginate(5);
        $products = Product::all();
        return view('admin/dashboard/product',compact('products'));
    }
    public function showShop(){
        $products = Product::all();
        return view('best-seller',compact('products'));
    }
    public function showByDetailId( $id ){
        $product = Product::find($id);
        return view('detail-product',compact('product'));
    }
    public function home(){
        $products = Product::all();
        return view('home',compact('products'));
    }

    public function  search(Request $request){

        $request->validate([
            'word' => 'required'
        ]);
        $word = $request->get('word');

        $query = Product::query();
        $products= $query->where('name_product','like', "%$word%")
                            ->orWhere('description','like', "%$word%")
                            ->get();

        return view('search',compact('products','word'));

    }

    public function destroy( $id ){
        $delete = Product::find($id);
        $delete->delete();
        return redirect('dashboard/productos')->with('delete_product','El Producto fue eliminado de la Lista');
    }
    public function productById( $id ){
        $product = Product::find($id);
        return view('admin.dashboard.update_product',compact('product'));
    }
    public function updateProductById( Request $request, $id){
        $product = Product::find($id);
        $request->validate([
            'name_product' => 'required',
            'description' => 'required',
            'position' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $product->name_product = $request->input('name_product');
        $product->description = $request->input('description');
        $product->position = $request->input('position');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');

        $product->save();

        return redirect('dashboard/productos')->with('update_product', 'Datos Actualizados');
    }
    public function updateImage1( Request $request, $id){

        $product = Product::find($id);
        request()->validate([
            'img1'=> 'required'
        ]);
        $product->img1 = $request->file('img1')->store('public');
        $product->save();
        return back()->with('update_img','Imagen Actualizada');
    }
    public function updateImage2( Request $request, $id){

        $product = Product::find($id);
        request()->validate([
            'img2'=> 'required'
        ]);
        $product->img2 = $request->file('img2')->store('public');
        $product->save();
        return back()->with('update_img','Imagen Actualizada');

    }
    public function updateImage3( Request $request, $id){

        $product = Product::find($id);
        request()->validate([
            'img3'=> 'required'
        ]);
        $product->img3 = $request->file('img3')->store('public');
        $product->save();
        return back()->with('update_img','Imagen Actualizada');

    }
    public function updateImage4( Request $request, $id){

        $product = Product::find($id);
        request()->validate([
            'img4'=> 'required'
        ]);
        $product->img4 = $request->file('img4')->store('public');
        $product->save();
        return back()->with('update_img','Imagen Actualizada');

    }
    public function addProduct( Request $request){
        $request->validate([
            'name_product' => 'required',
            'description' => 'required',
            'position' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'img3' => 'required',
            'img4' => 'required',
        ]);

        Product::create([
            'name_product' => $request->input('name_product'),
            'description' => $request->input('description'),
            'position' => $request->input('position'),
            'category' => $request->only('name_product'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'img1' => $request->file('img1')->store('public'),
            'img2' => $request->file('img2')->store('public'),
            'img3' => $request->file('img3')->store('public'),
            'img4' => $request->file('img4')->store('public')
        ]);


        return redirect('dashboard/productos')->with('add_product','Tu nuevo Producto fue Agregado Correctamente');
    }

}

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ProductController::class, 'home'])->name('home');

Route::get('shop',[ProductController::class, 'home'])->name('shop');



Route::get('contacto',function (){
    return view('contact');
})->name('contact');
Route::post('contacto', [ContactController::class,'add'] );

Route::get('mas-vendidos', [ProductController::class,'showShop'])->name('best-seller');
Route::get('detalle/{id}', [ProductController::class,'showByDetailId'])->name('detail');

Route::get('nosotros',function(){
    return view('about');
})->name('about');





//Search do Product
Route::post('buscar',[ProductController::class,'search'])->name('search');



//Routes private
Route::get('admin', function(){
    return view('admin/login');
})->name('login');


Route::post('admin',function(){

    $credentials = request()->only('name','password');
    if( Auth::attempt($credentials) ){
        request()->session()->regenerate();
        return redirect('dashboard');
    }

    return redirect('admin');
});

Route::get('admin/close',function ( ){
    request()->session()->flush();
    return redirect('admin');

})->name('close_session')->middleware('auth');


Route::get('dashboard', function(){
    return view('admin/dashboard/dashboard');
})->name('dashboard')->middleware('auth');


//View Products
Route::get('dashboard/productos',[ProductController::class,'show'])->name('product')->middleware('auth');;
Route::get('dashboard/productos/{id}',[ProductController::class,'destroy'])->name('product.destroy')->middleware('auth');


Route::get('dashboard/modificar/{id}',[ProductController::class,'productById'])->name('product.byId')->middleware('auth');;
Route::post('dashboard/modificar/{id}',[ProductController::class,'updateProductById'])->name('product.update.byId')->middleware('auth');;



//update password

Route::get('dashboard/actualizar-password',function (){
    return view('admin.dashboard.update_password');
})->name('update.password')->middleware('auth');

//update image
Route::post('dashboard/modificar/img1/{id}',[ProductController::class,'updateImage1'])->name('product.img.update1')->middleware('auth');;
Route::post('dashboard/modificar/img2/{id}',[ProductController::class,'updateImage2'])->name('product.img.update2')->middleware('auth');;
Route::post('dashboard/modificar/img3/{id}',[ProductController::class,'updateImage3'])->name('product.img.update3')->middleware('auth');;
Route::post('dashboard/modificar/img4/{id}',[ProductController::class,'updateImage4'])->name('product.img.update4')->middleware('auth');;


Route::get('dashboard/mensajes',[ContactController::class,'show'])->name('admin.message')->middleware('auth');;
Route::get('dashboard/mensajes/{id}',[ContactController::class,'destroy'])->name('admin.message.destroy')->middleware('auth');;

Route::get('dashboard/nuevo-producto',function (){
   return view('admin.dashboard.new_product');
})->middleware('auth');;

Route::post('dashboard/nuevo-producto',[ProductController::class,'addProduct'])->name('dashboard.new_product')->middleware('auth');;






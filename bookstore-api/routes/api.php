<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Resources\Book as BookResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
<<<<<<< HEAD
/*Route::get('nama', function() {
=======
Route::get('nama', function() {
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
Route::get('nama', function() {
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    return "Bookstore-API";
});
Route::post('deskripsi', function() {
    return "Dokumentasi Bookstore-API";
<<<<<<< HEAD
<<<<<<< HEAD
});*/
/*Route::get('category/{id}', function($id){
=======
});
Route::get('category/{id}', function($id){
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
});
Route::get('category/{id}', function($id){
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    $categories = [
        1 => 'Matematika',
        2 => 'Bahasa',
        3 => 'Teknologi'
    ];
    $id = (int) $id;
    if($id==0) return 'Silahkan pilih kategori';
    else return "Anda memilih kategori <b>".$categories[$id]."</b>";
});
Route::get('/book/{id}', function () {
    return 'menampilkan buku';
<<<<<<< HEAD
<<<<<<< HEAD
})->where('id', '[0-9]+');*/

Route::prefix('v1')->group(function(){
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    
    Route::group(['middleware' => 'cors'], function () {
        Route::post('logout', 'App\Http\Controllers\AuthController@logout');
        Route::post('shipping', 'App\Http\Controllers\ShopController@shipping');
        Route::post('services', 'App\Http\Controllers\ShopController@services');
        
    });
    
=======
})->where('id', '[0-9]+');

Route::prefix('v1')->group(function(){
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
})->where('id', '[0-9]+');

Route::prefix('v1')->group(function(){
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    Route::get('books', 'App\Http\Controllers\BookController@index');
    Route::get('book/{id}', 'App\Http\Controllers\BookController@view')->where('id', '[0-9]+');
    Route::get('categories/random/{count}', 'App\Http\Controllers\CategoryController@Random');
    Route::get('books/top/{count}', 'App\Http\Controllers\BookController@top');
    Route::get('categories','App\Http\Controllers\CategoryController@index');
<<<<<<< HEAD
<<<<<<< HEAD
    Route::get('categories/slug/{slug}', 'App\Http\Controllers\CategoryController@slug');
    Route::get('books/slug/{slug}', 'App\Http\Controllers\BookController@slug');
    Route::get('books/search/{keyword}', 'App\Http\Controllers\BookController@search');
    Route::get('provinces', 'App\Http\Controllers\ShopController@provinces');
    Route::get('cities', 'App\Http\Controllers\ShopController@cities');
    Route::get('couriers', 'App\Http\Controllers\ShopController@couriers');
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
});
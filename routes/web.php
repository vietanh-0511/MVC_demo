<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class,'getProducts']);
Route::get('/add', function (){
    return view('/product/add');
});
Route::post('/add', [ProductController::class, 'addProductProcess']);
Route::get('/update/{id}', [ProductController::class, 'update']);
Route::post('/update/{id}', [ProductController::class, 'updateProcess']);
Route::get('/delete/{id}', [ProductController::class, 'delete']);


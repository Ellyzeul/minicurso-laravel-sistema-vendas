<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/product', function() {
  return (new ProductController())->read();
});

Route::post('/product', function(Request $request) {
  return (new ProductController())->create(($request));
});

Route::delete('/product/{id}', function(int $id) {
  return (new ProductController())->exclude($id);
});

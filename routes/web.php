<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {

    return view('main');
});



Route::get('/route1',function(){
    return 'welcome from route 1';
});

Route::get('/route2',function(){
    // model
    $users = User::select('id','name')->get();
    return $users;
});

Route::get('/category',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('/product',[App\Http\Controllers\ProductController::class,'index'])->name('product.index');

Route::get('/category/show/{id}',[App\Http\Controllers\CategoryController::class,'show']);


Route::get('/category/delete/{id}',
[App\Http\Controllers\CategoryController::class,
'destroy'])->name('category.destroy');


Route::get('/category/create',[App\Http\Controllers\CategoryController::class,'create'])->name('category.create');


Route::post('/category/submit',[App\Http\Controllers\CategoryController::class,'save'])->name('category.submit');
Route::get('/category/update/{id}',[App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::put('/category/update/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
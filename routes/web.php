<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArchivCategoriesController;
use App\Http\Controllers\CategoryController;
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

Route::get('/',[\App\Http\Controllers\Site\HomeController::class,'index' ])->name('welcome');
route::get('all/category/product/{id}',[\App\Http\Controllers\Site\HomeController::class,'viewCatPro' ])->name('productCat');
route::get('site/about-us',[\App\Http\Controllers\Site\HomeController::class,'about' ])->name('abouts');
route::get('site/all-products',[\App\Http\Controllers\Site\HomeController::class,'allPro' ])->name('allPro');
route::get('site/all-product/details/{id}',[\App\Http\Controllers\Site\HomeController::class,'details' ])->name('details');


Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
//    route::resource('categories', CategoryController::class);
//    Route::group(['prefix' => 'categories' , 'as' => 'categories.'],function(){
        route::get('categories/index', [CategoryController::class,'index'])->name('categories.index');
        route::get('categories/create/', [CategoryController::class,'create'])->name('categories.create');
        route::post('categories/store', [CategoryController::class,'store'])->name('categories.store');
        route::post('categories/update', [CategoryController::class,'update'])->name('categories.update');
        route::delete('categories/destroy/', [CategoryController::class,'destroy'])->name('categories.destroy');
        route::post('categories/delete', [CategoryController::class,'delete'])->name('categories.deleteBtn');
        route::get('categories/edit/{id}', [CategoryController::class,'edit'])->name('categories.edit');

        route::get('categories/archives', [ArchivCategoriesController::class,'index'])->name('categories.archives.index');
        route::patch('categories/archives/update', [ArchivCategoriesController::class,'update']);
        route::delete('categories/archives/destroy/', [ArchivCategoriesController::class,'destroy']);

//    route::resource('categories/archives', ArchivCategoriesController::class)->only('index', 'update', 'destroy');
//    });

//    Route::group(['prefix' => 'products'],function() {
        route::get('products/menu', [ProductController::class,'index'])->name('products.index');
        route::post('products/store', [ProductController::class,'store'])->name('products.store');
        route::post('products/update', [ProductController::class,'update'])->name('products.update');
        route::delete('products/destroy/', [ProductController::class,'destroy'])->name('products.destroy');
//    });

    Route::group(['prefix' => 'abouts' , 'as' => 'abouts.'],function() {
        route::get('/', [AboutUsController::class,'index'])->name('index');
        route::get('/create', [AboutUsController::class,'create'])->name('create');
        route::post('/store', [AboutUsController::class,'store'])->name('store');
        route::post('/update', [AboutUsController::class,'update'])->name('update');
        route::delete('/destroy', [AboutUsController::class,'destroy'])->name('destroy');
        route::get('/edit/{id}', [AboutUsController::class,'edit'])->name('edit');
    });

});

require __DIR__ . '/auth.php';

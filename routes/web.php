<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

//chartjs Route
Route::get("stock/add", [App\Http\Controllers\StockController::class, 'create']);
Route::post("stock/add", [App\Http\Controllers\StockController::class, 'store']);
Route::get("stocks", [App\Http\Controllers\StockController::class, 'index']);
// Route::get("stock/chart", [App\Http\Controllers\StockController::class, 'chart']);


// Route::get("stocks2", [App\Http\Controllers\StockController::class, 'index2']);
Route::get("status/chart", [App\Http\Controllers\StockController::class, 'statusChart']);
Route::get("marginPer", [App\Http\Controllers\StockController::class, 'marginPer']);

Route::get("marginUser/chart", [App\Http\Controllers\StockController::class, 'marginUser']);





//Localization Route
Route::get("locale/{lange}", [App\Http\Controllers\LocalizationController::class, 'setLang']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/table',function(){
    return view ('table-data');
});
Route::get('/insert',function(){
    return view ('insert');
});


//a route for the test
Route::get('/test',function(){
    
});

Route::get('/home/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::post('project/fetch', [App\Http\Controllers\HomeController::class, 'fetch'])->name('project.fetch');

Route::group(['prefix' => 'home'], function () {
    
}
);


Route::resource('product', App\Http\Controllers\ProductController::class);
Route::post('product/create2', [App\Http\Controllers\ProductController::class, 'create2'])->name('product.create2');
Route::resource('product/PaperCup', App\Http\Controllers\PaperCupController::class);
Route::resource('product/PlasticCups', App\Http\Controllers\PlasticCupsController::class);
Route::resource('product/PaperBox', App\Http\Controllers\PaperBoxController::class);
Route::resource('process', App\Http\Controllers\ProcessController::class);
Route::resource('supplier', App\Http\Controllers\SupplierController::class);
Route::resource('customer', App\Http\Controllers\CustomersController::class);

Route::get('/{page}', [AdminController::class, 'index']);

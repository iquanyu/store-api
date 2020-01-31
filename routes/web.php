<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->middleware('web')->name('admin.')->namespace('\App\Http\Controllers\Admin')->group(function(){
  
  Route::middleware('auth')->group(function(){
    
    Route::get('/', 'DashboardController@dashboard')->name('dashboard');
    /*Route::resource('/logs', 'OperationLogController')->only(['index','destroy']);*/
    
    Route::resource('/permissions', 'PermissionController');
    Route::resource('/roles', 'RoleController');
	  Route::resource('/users', 'UserController');
    
    Route::resource('/categories', 'CategoryController');

    Route::resource('/attributes', 'AttributeController');
    Route::resource('/attribute_families', 'AttributeFamilyController');

    /*Route::resource('/menus', 'MenuController');
    Route::resource('/categories', 'CategoryController');
    
    Route::resource('/product_types', 'ProductTypeController');
    Route::resource('/product_attributes', 'ProductAttributeController');
    Route::resource('/product_values', 'ProductValueController');*/
  });
});
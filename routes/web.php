<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/menu/{id}','Menu\menuController@index')->name('menus.index');

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});
//urun e routes
Route::group(['prefix' => 'urun','middleware' => 'auth'],function (){
	
    Route::get('/','CMS\productController@index')->name('product.list');
    Route::get('/ekle','CMS\productController@create_form')->name('product.createForm');
    Route::post('/ekle','CMS\productController@create')->name('prodcut.create');
	
    Route::get('/duzenle/{id}','CMS\productController@edit_form')->name('product.edit_form');
    Route::post('/guncelle','CMS\productController@edit')->name('product.edit');
    Route::get('/sil/{id}','CMS\productController@remove')->name('product.remove');
    Route::post('/durum','CMS\productController@updateStatus')->name('product.status');

});

//kategori routes
Route::group(['prefix' => 'kategori','middleware' => 'auth'],function (){
    Route::get('/','CMS\categoryController@index')->name('category.list');
    Route::get('/ekle','CMS\categoryController@create_form')->name('category.createForm');
    Route::post('/ekle','CMS\categoryController@create')->name('category.create');
    Route::get('/duzenle/{id}','CMS\categoryController@edit_form')->name('category.edit_form');
    Route::post('/guncelle','CMS\categoryController@edit')->name('category.edit');
    Route::get('/sil/{id}','CMS\categoryController@remove')->name('category.remove');
    Route::post('/durum','CMS\categoryController@updateStatus')->name('category.status');
    Route::get('detay/{id}','CMS\categoryController@detail')->name('category.detail');

});

//alt-kategori routes
Route::group(['prefix' => 'alt-kategori','middleware' => 'auth'],function (){
    Route::get('/','CMS\subCategoryController@index')->name('sub_category.list');
    Route::get('/ekle','CMS\subCategoryController@create_form')->name('sub_category.createForm');
    Route::post('/ekle','CMS\subCategoryController@create')->name('sub_category.create');
    Route::get('/duzenle/{id}','CMS\subCategoryController@edit_form')->name('sub_category.edit_form');
    Route::post('/guncelle','CMS\subCategoryController@edit')->name('sub_category.edit');
    Route::get('/sil/{id}','CMS\subCategoryController@remove')->name('sub_category.remove');
    Route::post('/durum','CMS\subCategoryController@updateStatus')->name('sub_category.status');
    Route::get('detay/{id}','CMS\subCategoryController@detail')->name('sub_category.detail');

});

//qr routes
Route::get('qr',function (){

   return view('qr.index');
})->name('qr');

Route::get('theme',function (){
 $cafe= \App\cafe::where('id' , Auth::user()->cafe_id)->first();
 \Illuminate\Support\Facades\View::share('cafe',$cafe);
    return view('menu_theme.menu_theme');
})->name('theme');

Route::get('theme_change/{id}','Menu\menuController@theme_change')->name('theme.change');
//Route::get('storage/{filename}', function ($filename)
//{
//    $path = storage_path($filename);
//
//    if (!\Illuminate\Support\Facades\File::exists($path)) {
//        abort(404);
//    }
//
//    $file = \Illuminate\Support\Facades\File::get($path);
//    $type = \Illuminate\Support\Facades\File::mimeType($path);
//
//    $response = \Illuminate\Support\Facades\Response::make($file, 200);
//    $response->header("Content-Type", $type);
//
//    return $response;
//});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


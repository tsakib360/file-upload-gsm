<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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


Route::get('/recent', function () {
    return view('recent');
});
Route::get('/userindex', function () {
    return view('user.index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::post('message','AdminController@message')->name('message');
Route::get('/','FileuploadController@fetch')->name('fetch');
Route::get('/home1','FileuploadController@fetch')->name('fetch');
Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');

Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');


Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::post('message','AdminController@message')->name('message');
    Route::get('dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('managecategory','AdminController@managecategory')->name('managecategory');
    Route::get('/categorydelete/{id}', 'AdminController@categorydelete')->name('categorydelete');
    Route::get('categoryedit/{id}', 'AdminController@categoryedit')->name('categoryedit');
    Route::post('/editcategory/updatecategory','AdminController@updatecategory')->name('updatecategory');
    Route::get('category','AdminController@category')->name('category');
    Route::get('subcategory','AdminController@subcategory')->name('subcategory');
    Route::get('managesubcategory','AdminController@managesubcategory')->name('managesubcategory');
    Route::get('subcategory/delete/{id}', 'AdminController@subcategorydelete')->name('subcategorydelete');
    Route::get('/editsubcategory/{id}', 'AdminController@subcategoryedit')->name('subcategoryedit');
    Route::get('upload','AdminController@upload')->name('upload');
    Route::get('user','AdminController@user')->name('user');
    Route::get('download','AdminController@download')->name('download');
    Route::post('/storecategory','FileuploadController@storecategory')->name('storecategory');
    Route::post('/storesubcategory','FileuploadController@storesubcategory')->name('storesubcategory');
    Route::post('/fileUploadPost','FileuploadController@fileUploadPost')->name('fileUploadPost');
    Route::get('managefile','FileuploadController@managefile')->name('managefile');
    Route::get('usermessage','AdminController@usermessage')->name('usermessage');
    Route::get('/filedelete/{id}', 'AdminController@filedelete')->name('filedelete');


    Route::get('emuu/{id}', 'CategoryController@GetSubCatAgainstMainCatEdit');
});
Route::get('user/register', 'Auth\RegistrationController@create')->name('create');
Route::post('register', 'Auth\RegistrationController@store')->name('store');
Route::get('user/login','Auth\UserAuthController@getLogin')->name('userLogin');
Route::post('user/login', 'Auth\UserAuthController@postLogin')->name('userLoginPost');
Route::get('user/logout', 'Auth\UserAuthController@logout')->name('userLogout');

Route::group(['prefix' => 'user','middleware' => 'userauth'], function () {
	// Admin Dashboard
	Route::get('userdashboard','UserController@userdashboard')->name('userdashboard');
});

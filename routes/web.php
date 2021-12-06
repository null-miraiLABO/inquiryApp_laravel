<?php

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
$controller_path = 'App\Http\Controllers';

// 入力ページ
Route::get('/', $controller_path.'\InquiryController@index');

// 確認ページ
Route::post('/confirm', $controller_path.'\InquiryController@confirm');

// 完了ページ
Route::post('/thanks', $controller_path.'\InquiryController@thanks');
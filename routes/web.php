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

Route::get('/', function () {
    return view('welcome');
});

route::get('/Dashboard','asset_controller@index');

// Route::get('/dashboard', function(){
//     return view('/asset/dashboard', [
//         "title" => 'Dashboard'
//     ]);
// });

route::post('/asset/create','asset_controller@create');
route::get('/login','login_controller@viewlogin');
route::get('/admin_dashboard','login_controller@viewadmin');
route::get('/scanner','asset_controller@scanner');
route::get('/downloadPDF/download-pdf','asset_controller@cetak_pdf');
route::get('/dashboard','asset_controller@dashboard');

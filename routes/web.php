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

Route::get('/question/1/', function () {
    return view('qone');
});

Route::get('/parent/', function () {
    return view('parent');
});

Route::get('/child/', function () {
    return view('child');
});

Route::get('/main/', function () {
    return view('main');
});

Route::get('/subone/', function () {
    return view('subone');
});

Route::get('/print-values/', function () {
    return view('printvalues');
});

Route::get('/ssp/', function () {
    return view('my/parentshowstop');
});

Route::get('/vp/', function () {

    $product = array("Shirt", 1200,  "XL", 1234);

    return view('variables/variables', array('p' => $product) );

});
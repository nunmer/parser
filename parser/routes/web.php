<?php
include_once 'C:\xampp\htdocs\parser\parser\resources\views\parser.php';
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

Route::get('/parser/eurotousd', function () {
    return getCurrency('EUR-USD');
});
Route::get('/parser/usdtojpy', function () {
    return getCurrency('USD-JPY');
});
Route::get('/parser/gbptousd', function () {
    return getCurrency('GBP-USD');
});
Route::get('/index', function () {
    return view('index');
});

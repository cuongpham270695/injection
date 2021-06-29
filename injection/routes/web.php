<?php

use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    if (!empty($request->value)){
        $customers = DB::table('customers')->where('id',$request->value)->get();
    }
    dump('SELECT * FROM customers WHERE id = ' . $request->value);
    dd($customers);
    return view('welcome');
});

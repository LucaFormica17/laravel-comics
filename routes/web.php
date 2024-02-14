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
    $comics = config('comics');
    return view('homepage', compact('comics'));
})->name('homepage');

Route::get('/{param}', function ($param) {
    $comics = config('comics');
    
    $comic = null;

    foreach($comics as $item){
        if($item['id'] == $param){
            $comic = $item;
        }
    }
    return view('details', compact('comic'));

})->name('homepage');

Route::get('/details', function(){

})->name('details');
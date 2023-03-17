<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/products', function () {

    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/main', function () {
    return view('main');
});

//Teste id nulo, pode cetar um id estavel caso o usuario não o declare;
/*Route::get('/products_teste/{id?}', function ($id = null) {
    return view('products', ['id' => $id]);
});  */
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController;

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

    $data = [
        'page_title' => 'Elenco comics',

    ];



    return view('welcome');
})->name('home');

Route::get('/comics', [ComicController::class,'index'])->name('comics.index');

Route::get('/comics/{comic}', [ComicController::class,'show'])->name('comics.show');


Route::get('/comics/create', [ComicController::class,'create']);

Route::post('/comics', [ComicController::class,'store'])->name('comics.store');


Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
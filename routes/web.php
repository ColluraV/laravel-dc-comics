<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Models\Comic;
use GuzzleHttp\Promise\Create;

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


//create
Route::get('/create',[ComicController::class, "create"])->name("comic.create");
Route::post("/",[ComicController::class, "store"])->name("comic.store");


//read
Route::get('/',[ComicController::class, "index"])->name("index");
Route::get("/comic/{cardComics}", [ComicController::class, "show"])->name("show");
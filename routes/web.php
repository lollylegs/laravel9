<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


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

//Route::get('/blog', [PostsController::class, 'index']);

Route::resource('blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);




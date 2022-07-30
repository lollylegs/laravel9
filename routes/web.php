<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


/*
    GET -Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed
*/

// GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{id}', [PostsController::class, 'show']);


//POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);

// PUT OR PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/1', [PostsController::class, 'update']);

//DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);

//Route::resource('blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);


// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

// Return view
//Route::view('/blog', 'blog.index');










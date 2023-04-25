<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//Route::view('/', 'welcome')->name("principal");

Route::get('/', [PostController::class, 'home'])->name('principal');

Route::get("/posts", [PostController::class, 'index'] )->name("post");
Route::view('/contacto', 'contacto')->name("contactos");
Route::view('/nosotros', 'nosotros')->name("nosotros");

Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts/create', [PostController::class, 'store']);
Route::get("/posts/{post}", [PostController::class, 'show'])->name('post.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('posts/{post}/edit', [PostController::class, 'update'])->name('post.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');


Route::get('/login',  function ()
{
    return 'Login page';
})->name('login');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

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
use App\Http\Controllers\EventController;
use App\Models\Post;

Route::get('/', [EventController::class, 'index']);

Route::get('dashboard.criar', [EventController::class, 'criar']);

Route::post('/criar', [EventController::class, 'store']);

Route::delete('/posts/{id}', [EventController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $events = Post::all();
        return view('dashboard',['events' => $events]);
    })->name('dashboard');
    Route::get('/criar', function () 
    {
        
        return view('criar');
    })->name('criar');
    Route::get('/fechar', function () {
        $events = Post::all();
        return view('fechar',['events' => $events]);
    })->name('fechar');
});

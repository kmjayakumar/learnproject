<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('welcome');
});






/*Promon LLP*/
Route::get('/addPost', [PostController::class, 'addPost'])->name('add.post');
Route::post('/savePost', [PostController::class, 'savePost'])->name('save.post');
Route::get('/viewPost', [PostController::class, 'viewPost'])->name('view.post');
Route::get('/editPost/{id}', [PostController::class, 'editPost'])->name('edit.post');
Route::post('/updatePost', [PostController::class, 'updatePost'])->name('update.post');
Route::get('/deletePost/{id}', [PostController::class, 'deletePost'])->name('delete.post');


Route::get('/posts', [PostController::class, 'search'])->name('posts');
//Route::post('/addComputer-product', [PostController::class, 'addComputer'])->name('add.computer');















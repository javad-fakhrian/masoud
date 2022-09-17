<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Index as AdminIndex;

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
    return view('layouts.app');
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/admin',AdminIndex::class)->name('admin.index')->middleware('AdminUser');
    // Route::get('/admin/posts',AdminPosts::class)->name('admin.posts')->middleware('AdminUser');
    // Route::get('/admin/comments',AdminComments::class)->name('admin.comments')->middleware('AdminUser');
});
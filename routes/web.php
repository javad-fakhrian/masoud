<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Portfolio\contactus\Index as ContactusIndex;
use App\Http\Livewire\Admin\Index as AdminIndex;
use App\Http\Livewire\Admin\Contactus as AdminContactus;
use App\Http\Livewire\Admin\Work\Create as AdminWorkCreate;
use App\Http\Livewire\Admin\Work\All as AdminWorkAll;
use App\Http\Livewire\Admin\Work\Edit as AdminWorkEdit;

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

Route::get('/work-samples', function () {
    return view('portfolio.portfolio');
})->name('work.sample');


Auth::routes();

Route::get('/contact-us', ContactusIndex::class)->name('contactus');

Route::middleware('auth')->group(function () {
    Route::get('/admin',AdminIndex::class)->name('admin.index')->middleware('AdminUser');
    Route::get('/admin/contact-us',AdminContactus::class)->name('admin.contactus')->middleware('AdminUser');
    Route::get('/admin/work/create',AdminWorkCreate::class)->name('admin.work.create')->middleware('AdminUser');
    Route::get('/admin/work/all',AdminWorkAll::class)->name('admin.work.all')->middleware('AdminUser');
    Route::get('/admin/work/{work}/edit',AdminWorkEdit::class)->name('admin.work.edit')->middleware('AdminUser');
});
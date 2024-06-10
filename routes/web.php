<?php

use App\Http\Controllers\Pengumumancontroller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        // 'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

use Laravel\Socialite\Facades\Socialite;
/**
* socialite auth
*/
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\EventController;


//route pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index')->middleware('auth');
Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store')->middleware('auth');
Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create')->middleware('auth');
Route::get('/pengumuman/edit/{id}', [PengumumanController::class, 'edit'])->name('pengumuman.edit')->middleware('auth');
Route::put('/editpengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update')->middleware('auth');
Route::get('/delpengumuman/{id}', [PengumumanController::class, 'delete'])->name('pengumuman.delete')->middleware('auth');
//route event
Route::get('/event', [EventController::class, 'index'])->name('event.index')->middleware('auth');
Route::post('/event', [EventController::class, 'store'])->name('event.store')->middleware('auth');
Route::get('/event/create', [EventController::class, 'create'])->name('event.create')->middleware('auth');
Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit')->middleware('auth');
Route::put('/editevent/{id}', [EventController::class, 'update'])->name('event.update')->middleware('auth');
Route::get('/delevent/{id}', [EventController::class, 'delete'])->name('event.delete')->middleware('auth');
//route pendaftar
Route::get('/pendaftar', [PendaftarController::class, 'index'])
    ->name('pendaftar.index')
    ->middleware('auth');
Route::post('/pendaftar', [PendaftarController::class, 'store'])->name('pendaftar.store');;
Route::get('/pendaftar/create/{event_id}', [PendaftarController::class, 'create'])->name('pendaftar.create');
Route::get('/pendaftar/edit/{event_id}/{pendaftar_id}', [PendaftarController::class, 'edit'])->name('pendaftar.edit')->middleware('auth');
Route::put('/editpendaftar/{id}', [PendaftarController::class, 'update'])->name('pendaftar.update')->middleware('auth');
Route::get('/delpendaftar/{id}', [PendaftarController::class, 'delete'])->name('pendaftar.delete')->middleware('auth');
Route::get('/detailpendaftar/{id}', [PendaftarController::class, 'detail'])->name('pendaftar.detail');
//route guest
Route::get('/eventguest', [EventController::class, 'guest'])->name('event.guest');
Route::get('/pengumumanguest', [PengumumanController::class, 'guest'])->name('pengumuman.guest');
Route::get('/unduhpengumuman/{id}', [PengumumanController::class, 'unduhPengumuman'])->name('unduhPengumuman')->name('pengumuman.unduhPengumuman');


<?php

use App\Http\Controllers\Admin\CircuitController;
use App\Http\Controllers\Admin\CircuitElementController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PointFortController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\CircuitController as ControllersCircuitController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/circuits', [ControllersCircuitController::class, 'index'])->name('circuit.index');
Route::get('/circuits/{id}', [ControllersCircuitController::class, 'show'])->name('circuit.show');

Route::post('/message/send', [MessageController::class, 'store'])->name("message.send");

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/reset', [DashboardController::class, 'reset'])->name('reset');

    Route::get('/admin/circuits', [CircuitController::class, 'index'])->name('admin.circuit.index');
    Route::get('/admin/circuits/delete/{id}', [CircuitController::class, 'destroy'])->name('admin.circuit.destroy');
    Route::post('/admin/circuits/store', [CircuitController::class, 'store'])->name('admin.circuit.store');
    Route::post('/admin/circuits/update', [CircuitController::class, 'update'])->name('admin.circuit.update');

    Route::get('/admin/circuits/elements/{id}', [CircuitElementController::class, 'index'])->name('admin.circuit.element.index');
    Route::get('/admin/circuits/elements/edit/{id}', [CircuitElementController::class, 'edit'])->name('admin.circuit.element.edit');
    Route::get('/admin/circuits/elements/create/{id}', [CircuitElementController::class, 'create'])->name('admin.circuit.element.create');
    Route::get('/admin/circuits/elements/delete/{id}', [CircuitElementController::class, 'destroy'])->name('admin.circuit.element.destroy');
    Route::post('/admin/circuits/elements/store', [CircuitElementController::class, 'store'])->name('admin.circuit.element.store');
    Route::post('/admin/circuits/elements/update/{id}', [CircuitElementController::class, 'update'])->name('admin.circuit.element.update');

    Route::post('/admin/circuits/points/store', [PointFortController::class, 'store'])->name('admin.circuit.points.store');
    Route::get('/admin/circuits/points/delete/{id}', [PointFortController::class, 'destroy'])->name('admin.circuit.points.destroy');

    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::post('/admin/contacts/update/{id}', [ContactController::class, 'update'])->name('admin.contact.update');

    Route::get('/admin/message/delete/{id}', [MessageController::class, 'destroy'])->name('admin.message.destroy');

    Route::post('/admin/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');
    Route::post('/admin/profil/password/{id}', [ProfilController::class, 'updatePassword'])->name('profil.password.update');
});

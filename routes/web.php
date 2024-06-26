<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilialeController;
use App\Http\Controllers\AutomezzoController;

Route::get('/', function () {return view('welcome');});

// Route Filiali //

Route::get('/filiali/crea',[FilialeController::class, 'create'])->name('filiali.create');
Route::get('/filiali', [FilialeController::class, 'index'])->name('filiali.index');
Route::get('/filiali/{filiale}',[FilialeController::class, 'show'])->name('filiali.show');
Route::post('/filiali/salva', [FilialeController::class, 'store'])->name('filiali.store');
Route::delete('/filiali/{filiale}', [FilialeController::class, 'destroy'])->name('filiali.destroy');


// Route Automezzi //

Route::get('/automezzi/crea',[AutomezzoController::class, 'create'])->name('automezzi.create');
Route::get('/automezzi', [AutomezzoController::class, 'index'])->name('automezzi.index');
Route::get('/automezzi/{automezzo}',[AutomezzoController::class, 'show'])->name('automezzi.show');
Route::post('/automezzi/salva', [AutomezzoController::class, 'store'])->name('automezzi.store');
Route::delete('/automezzi/{filiale}', [AutomezzoController::class, 'destroy'])->name('automezzi.destroy');
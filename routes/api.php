<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialistsController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\ProspectionController;

Route::get('/specialists/list', [SpecialistsController::class, 'getlist'])->name('specialists-list');
Route::get('/professional/list/{especialidade_id}', [ProfessionalController::class, 'getlist'])->name('professional-list');
Route::post('/source/new', [SourceController::class, 'store'])->name('source-new');
Route::get('/source/index', [SourceController::class, 'index'])->name('source-index');
Route::post('prospection/new', [ProspectionController::class, 'store'])->name('prospection-new');

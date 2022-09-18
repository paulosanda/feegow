<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialistiesController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\ProspectionController;

Route::get('/specialisties/list', [SpecialistiesController::class, 'list'])->name('specialisties-list');
Route::get('/professional/list/{especialidade_id}', [ProfessionalController::class, 'list'])->name('professional-list');
Route::post('/source/new', [SourceController::class, 'store'])->name('source-new');
Route::get('/source/index', [SourceController::class, 'index'])->name('source-index');
Route::post('prospection/new', [ProspectionController::class, 'store'])->name('prospection-new');

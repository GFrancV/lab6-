<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\CandidaturaController;

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

//FrontEnd routes
Route::get('/', [PageController::class,'index'])->name('home');
Route::get('disciplinas', [DisciplinaController::class,'index'])
->name('disciplinas.index');
Route::get('docentes', [DocenteController::class,'index'])
->name('docentes.index');
Route::get('cursos', [CursoController::class,'index'])
->name('cursos.index');
Route::get('candidaturas', [CandidaturaController::class,'create'])
->name('candidaturas.index');

Route::post('candidaturas', [CandidaturaController::class, 'store'])->
    name('candidaturas.store');

//Admin routes
Route::get('admin/disciplinas', [DisciplinaController::class,'admin_index'])
    ->name('admin.disciplinas');
Route::get('admin/disciplinas/{disciplina}/edit', [DisciplinaController::class, 'edit'])
    ->name('admin.disciplinas.edit');
Route::get('admin/disciplinas/create', [DisciplinaController::class, 'create'])
    ->name('admin.disciplinas.create');
    Route::post('admin/disciplinas', [DisciplinaController::class, 'store'])->name('admin.disciplinas.store');
Route::put('admin/disciplinas/{disciplina}', [DisciplinaController::class, 'update'])->name('admin.disciplinas.update');
Route::delete('admin/disciplinas/{disciplina}', [DisciplinaController::class, 'destroy'])->name('admin.disciplinas.destroy');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AcademicController;
use App\Http\Controllers\API\TechnicalController;
use App\Http\Controllers\API\ProfessionalController;
use App\Http\Controllers\API\SkillAssController;
use App\Http\Controllers\API\SocialConnectionController;


Route::get('/employee', [AcademicController::class, 'index']);
Route::get('/delete-employee/{id}', [AcademicController::class, 'delete']);
Route::get('/edit-employee/{id}', [AcademicController::class, 'edit']);
Route::get('/technical', [TechnicalController::class, 'index']);
Route::get('/delete-technical/{id}', [TechnicalController::class, 'delete']);
Route::get('/edit-technical/{id}', [TechnicalController::class, 'edit']);

Route::get('/professional', [ProfessionalController::class, 'index']);
Route::get('/delete-professional/{id}', [ProfessionalController::class, 'delete']);
Route::get('/edit-professional/{id}', [ProfessionalController::class, 'edit']);

Route::get('/skills', [SkillAssController::class, 'index']);
Route::get('/delete-skills/{id}', [SkillAssController::class, 'delete']);
Route::get('/edit-skills/{id}', [SkillAssController::class, 'edit']);

Route::get('/social', [SocialConnectionController::class, 'index']);
Route::get('/delete-social/{id}', [SocialConnectionController::class, 'delete']);
Route::get('/edit-social/{id}', [SocialConnectionController::class, 'edit']);

Route::post('/add-academic', [AcademicController::class, 'store']);
Route::post('/add-technical', [TechnicalController::class, 'store']);
Route::post('/add-professional', [ProfessionalController::class, 'store']);
Route::post('/add-skillass', [SkillAssController::class, 'store']);
Route::post('/add-socialconnection', [SocialConnectionController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
?>
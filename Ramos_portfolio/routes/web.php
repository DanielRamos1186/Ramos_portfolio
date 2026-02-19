<?php

use Illuminate\Support\Facades\Route;\
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 route::get('/', [HomeController::Class, 'index']); 
 route::get('/experiences', [ExperienceController::Class, 'index']); 
 route::get('/projects', [ProjectController::Class, 'index']);
 route::get('/skills', [SkillController::Class, 'index']);
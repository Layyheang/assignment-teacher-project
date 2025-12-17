<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::resource('teachers', TeacherController::class);


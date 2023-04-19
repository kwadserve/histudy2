<?php

use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\CourseController;
use App\Http\Controllers\Panel\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('panel/')->group(function(){
    Route::get('home',function(){
        return view('backend.home');
    });
    

    // CATEGORY
    Route::prefix('category/')->group(function(){
        Route::get('add',[CategoryController::class,'add'])->name('panel.category.add');
        Route::get('list',[CategoryController::class,'list'])->name('panel.category.list');
    });


    // TEACHER
    Route::prefix('teacher/')->group(function(){
        Route::get('add',[TeacherController::class,'add'])->name('panel.teacher.add');
        Route::get('list',[TeacherController::class,'list'])->name('panel.teacher.list');
    });

    // COURSE 
    Route::prefix('course/')->group(function(){
        Route::get('add',[CourseController::class,'add'])->name('panel.course.add');
        Route::get('list',[CourseController::class,'list'])->name('panel.course.list');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('panel/home',function(){
    return view('backend.home');
});

Route::get('home',function(){
    return view('frontend.home');
});

Route::get('asd',function(){
    return view('frontend.body.master');
});

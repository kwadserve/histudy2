<?php

use App\Http\Controllers\Front\CategoryController as FrontCategoryController;
use App\Http\Controllers\Front\CourseController as FrontCourseController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\TeacherController as FrontTeacherController;
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

// BACKEND (PANEL) ROUTE'LARI
Route::prefix('panel/')->group(function(){
    Route::get('home',function(){
        return view('backend.home');
    });
    

    // CATEGORY
    Route::prefix('category/')->group(function(){
        Route::get('add',[CategoryController::class,'add'])->name('panel.category.add');
        Route::post('store',[CategoryController::class,'store'])->name('panel.category.store');
        Route::get('list',[CategoryController::class,'list'])->name('panel.category.list');
    });


    // TEACHER
    Route::prefix('teacher/')->group(function(){
        Route::get('add',[TeacherController::class,'add'])->name('panel.teacher.add');
        Route::post('store',[TeacherController::class,'store'])->name('panel.teacher.store');
        Route::get('list',[TeacherController::class,'list'])->name('panel.teacher.list');
    });

    // COURSE 
    Route::prefix('course/')->group(function(){
        Route::get('add',[CourseController::class,'add'])->name('panel.course.add');
        Route::post('store',[CourseController::class,'store'])->name('panel.course.store');
        Route::get('list',[CourseController::class,'list'])->name('panel.course.list');
    });
});




// FRONTEND ROUTE'LARI
Route::prefix('/')->group(function(){
    Route::get('',[FrontController::class,'homepage'])->name('front.home');
    Route::get('about',[FrontController::class,'about'])->name('front.about');
    Route::get('blog',[FrontController::class,'blog_list'])->name('front.blog');
    Route::get('course',[FrontCourseController::class,'course_list'])->name('front.course');
    Route::get('course/detail',[FrontCourseController::class,'detail'])->name('front.course.detail');
    Route::get('teacher',[FrontTeacherController::class,'teacher_list'])->name('front.teacher');
    Route::get('categories',[FrontCategoryController::class,'list'])->name('front.categories');
    Route::get('contact',[FrontController::class,'contact'])->name('front.contact');
    Route::get('teacher/detail',[FrontController::class,'teacher_detail'])->name('front.teacher.detail');
});

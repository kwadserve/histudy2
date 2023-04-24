<?php

use App\Http\Controllers\Front\CategoryController as FrontCategoryController;
use App\Http\Controllers\Front\CourseController as FrontCourseController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\OneriController;
use App\Http\Controllers\Front\StudentController;
use App\Http\Controllers\Front\TeacherBasvuru;
use App\Http\Controllers\Front\TeacherController as FrontTeacherController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\CourseController;
use App\Http\Controllers\Panel\OneriController as PanelOneriController;
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


    Route::get('oneriler',[PanelOneriController::class,'list'])->name('panel.oneriler');
});




// FRONTEND ROUTE'LARI
Route::prefix('/')->group(function(){
    Route::get('',[FrontController::class,'homepage'])->name('front.home');
    Route::get('about',[FrontController::class,'about'])->name('front.about');
    Route::get('blog',[FrontController::class,'blog_list'])->name('front.blog');

    Route::get('course',[FrontCourseController::class,'course_list'])->name('front.course');
    Route::get('course/oner',[FrontCourseController::class,'oner'])->name('front.oner');
    Route::get('course/detail/{id?}',[FrontCourseController::class,'detail'])->name('front.course.detail');
    
    Route::get('teacher',[FrontTeacherController::class,'teacher_list'])->name('front.teacher');
    Route::get('teacher/basvuru',[FrontController::class,'ogr_basvuru'])->name('front.teacher.basvuru');
    Route::get('teacher/detail/{id?}',[FrontTeacherController::class,'teacher_detail'])->name('front.teacher.detail');
    Route::get('teacher/profile/{id?}',[FrontTeacherController::class,'teacher_profile'])->name('front.teacher.profile');
    Route::get('teacher/course/{id?}',[FrontTeacherController::class,'teacher_course'])->name('front.teacher.course');

    Route::get('categories',[FrontCategoryController::class,'list'])->name('front.categories');
    Route::get('kategori/kurslar/{id?}',[FrontCategoryController::class,'detail'])->name('front.category.detail');
    Route::get('contact',[FrontController::class,'contact'])->name('front.contact');

    Route::post('oneri/ekle',[OneriController::class,'add'])->name('front.oneri.add');

    Route::post('ogretmen/basvuru',[TeacherBasvuru::class,'add'])->name('front.teacher.add');

    Route::get('login',[FrontController::class,'login'])->name("front.login");
    Route::get('register',[FrontController::class,'register'])->name("front.register");

    Route::post('kayit-ol',[StudentController::class,'store'])->name('front.register.store');
});

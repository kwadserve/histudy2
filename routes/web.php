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

    Route::get('anasayfa',function(){
        return view('backend.home');
    });

    // CATEGORY
    Route::prefix('kategori/')->group(function(){
        Route::get('ekle',[CategoryController::class,'add'])->name('panel.category.add');
        Route::post('store',[CategoryController::class,'store'])->name('panel.category.store');
        Route::get('listele',[CategoryController::class,'list'])->name('panel.category.list');
    });

    // TEACHER
    Route::prefix('ogretmen/')->group(function(){
        Route::get('ekle',[TeacherController::class,'add'])->name('panel.teacher.add');
        Route::post('store',[TeacherController::class,'store'])->name('panel.teacher.store');
        Route::get('listele',[TeacherController::class,'list'])->name('panel.teacher.list');
    });

    // COURSE 
    Route::prefix('seminer/')->group(function(){
        Route::get('ekle',[CourseController::class,'add'])->name('panel.course.add');
        Route::post('store',[CourseController::class,'store'])->name('panel.course.store');
        Route::get('listele',[CourseController::class,'list'])->name('panel.course.list');
    });


    Route::get('oneriler',[PanelOneriController::class,'list'])->name('panel.oneriler');
});




// FRONTEND ROUTE'LARI
Route::prefix('/')->group(function(){
    Route::get('',[FrontController::class,'homepage'])->name('front.home');
    Route::get('hakkimizda',[FrontController::class,'about'])->name('front.about');
    Route::get('blog',[FrontController::class,'blog_list'])->name('front.blog');

    Route::get('seminer',[FrontCourseController::class,'course_list'])->name('front.course');
    Route::get('seminer/oner',[FrontCourseController::class,'oner'])->name('front.oner');
    Route::get('seminer/detay/{id?}',[FrontCourseController::class,'detail'])->name('front.course.detail');
    
    Route::get('ogretmen',[FrontTeacherController::class,'teacher_list'])->name('front.teacher');
    Route::get('ogretmen/basvuru',[FrontController::class,'ogr_basvuru'])->name('front.teacher.basvuru');
    Route::get('ogretmen/detay/{id?}',[FrontTeacherController::class,'teacher_detail'])->name('front.teacher.detail');
    Route::get('ogretmen/profil/{id?}',[FrontTeacherController::class,'teacher_profile'])->name('front.teacher.profile');
    Route::get('ogretmen/seminer/{id?}',[FrontTeacherController::class,'teacher_course'])->name('front.teacher.course');

    Route::get('kategoriler',[FrontCategoryController::class,'list'])->name('front.categories');
    Route::get('kategori/kurslar/{id?}',[FrontCategoryController::class,'detail'])->name('front.category.detail');
    Route::get('iletisim',[FrontController::class,'contact'])->name('front.contact');

    Route::post('oneri/ekle',[OneriController::class,'add'])->name('front.oneri.add');

    Route::post('ogretmen/basvuru',[TeacherBasvuru::class,'add'])->name('front.teacher.add');
    
    Route::get('giris-yap',[FrontController::class,'login'])->name("front.login");
    Route::post('login/post',[StudentController::class,'login_post'])->name("front.login.post");
    Route::get('logout',[StudentController::class,'logout'])->name("front.logout");
    Route::get('kayit/ol',[FrontController::class,'register'])->name("front.register");
    Route::get('ara',[FrontController::class,'search_post'])->name('front.search');

    Route::post('kayit-ol',[StudentController::class,'store'])->name('front.register.store');
    Route::get('ogrenci/kurs/ekle/{id?}',[FrontController::class,'ogrenci_kurs_ekle'])->middleware('auth:ogrenci')->name('ogrenci.kurs');
});

<?php


use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\movieController;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//กำหนด Route API ไปที่ไฟล์ TeacherController
Route::resource('movie', movieController::class);

// Route::get('/movie/search', [movieController::class, 'Search']);
Route::get('/movies', [movieController::class, 'pad']);



//กำหนด Route API Login ไปที่ไฟล์ AuthController
Route::post('login',[AuthController::class,'login']);


//สร้างประตูสุ่มิติ หรือ middleware สำหรับตรวจสอบสิทธิการเข้าใช้งาน

Route::group(['middleware' => [
    'auth:sanctum',
]],

        function(){
            Route::resource('movie',movieController::class);
            // กำหนด Route สำหรับการ Logout
            Route::post('logout',[AuthController::class,'logout']);

        }
);

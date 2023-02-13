<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
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


Route::get('/', function () {
    return view('homepage');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

// Route::get('/showStaff', function () {
//     return view('showStaff');
// });
Route::get('/showStaff', [StaffController::class, 'index']);

// Route::get('/addStaff', function () {
    //     return view('addStaff');
    // });
Route::get('/addStaff', [StaffController::class, 'create']);
Route::post('/storeStaff', [StaffController::class, 'store']);
Route::get('/editStaff/{id}', [StaffController::class, 'edit']);
Route::patch('/updateStaff/{id}', [StaffController::class, 'update']);
Route::delete('/deleteStaff/{id}', [StaffController::class, 'destroy']);
    
Route::get('/contactUs', function () {
    return view('contactUs');
});
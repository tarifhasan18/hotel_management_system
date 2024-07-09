<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home.index');
// });
Route::get('/',[AdminController::class,'home']);


route::get('/home',[AdminController::class,'index'])->name('home')->middleware(['auth','admin']);
route::get('/create_room',[AdminController::class,'create_room']);
route::post('/add_room',[AdminController::class,'add_room']);
route::get('/view_room',[AdminController::class,'view_room']);
route::get('/room_delete/{id}',[AdminController::class,'room_delete']);
route::get('/room_update/{id}',[AdminController::class,'room_update']);
route::post('/edit_room/{id}',[AdminController::class,'edit_room'])->middleware(['auth','admin']);
route::get('/room_details/{id}',[HomeController::class,'room_details']);
route::post('/add_booking/{id}',[HomeController::class,'add_booking']);
route::get('/bookings',[AdminController::class,'bookings'])->middleware(['auth','admin']);
route::get('/delete_booking/{id}',[AdminController::class,'delete_booking']);
route::get('/approve_book/{id}',[AdminController::class,'approve_book']);
route::get('/reject_book/{id}',[AdminController::class,'reject_book']);
route::get('/view_gallery',[AdminController::class,'view_gallery']);
route::post('/upload_gallery',[AdminController::class,'upload_gallery']);
route::get('/delete_gallery/{id}',[AdminController::class,'delete_gallery']);
route::post('/contact',[HomeController::class,'contact']);
route::get('/all_messages',[AdminController::class,'all_messages']);
route::get('/send_mail/{id}',[AdminController::class,'send_mail']);
route::post('/mail/{id}',[AdminController::class,'mail']);
route::get('/our_rooms',[HomeController::class,'our_rooms']);
route::get('/hotel_gallery',[HomeController::class,'hotel_gallery']);
Route::get('/contact_us',[HomeController::class,'contact_us']);
Route::get('/about_us',[HomeController::class,'about_us']);
Route::get('/blog_post',[HomeController::class,'blog_post']);

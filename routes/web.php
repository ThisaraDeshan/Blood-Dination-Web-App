<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\getLocationController;
use App\Models\donerlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\ratingController;
use App\Http\Controllers\searchcontroller;



Route::get('/', function () {

    $posts = donerlist::all();
    return view('welcome',compact('posts'));
});





Auth::routes();



Route::get('/redirects',[HomeController::class,'index'])->name('index');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',[HomeController::class,'index'])->name('dashboard');

route::post('/donerstore',[postcontroller::class,'donerstore'])->name('donerstore');

route::post('/neederstore',[postcontroller::class,'neederstore'])->name('neederstore');

route::get('/search',[searchcontroller::class,'search'])->name('search');

route::get('/donerhome',[HomeController::class,'adddonerpost'])->name('adddonerpost');

route::get('/About-Us',[HomeController::class,'aboutus'])->name('aboutus');

route::get('/Contact-Us',[HomeController::class,'contactus'])->name('contactus');

route::post('/contactusmessage',[postcontroller::class,'contactusmessage'])->name('contactusmessage');

route::get('/location',[HomeController::class,'location'])->name('location');

route::get('/delete/{id}',[admincontroller::class,'userdelete'])->name('delete');

route::get('/postdelete/{id}',[admincontroller::class,'postdelete'])->name('postdelete');

route::get('/admindonerposts',[HomeController::class,'admindonerposts'])->name('admindonerposts');

route::get('/{userid}/sendmessage',[postcontroller::class,'sendMessage'])->name('sendmessage');

route::get('/notifications',[HomeController::class,'notifications'])->name('notifications');

route::get('bestDonors',[HomeController::class,'bestDonors'])->name('bestDonors');

route::get('/neederhome',[HomeController::class,'neederhome'])->name('neederhome');

route::get('/needer-About',[HomeController::class,'neederAbout'])->name('neederAbout');

route::get('needer-Contact',[HomeController::class,'neederContact'])->name('neederContact');

route::get('/donerpost',[HomeController::class,'donerpost'])->name('donerpost');

route::get('doner-Ratings/{id}',[HomeController::class,'donerRatings'])->name('donerRatings');

route::post('/addRating/{id}',[ratingController::class,'addRating'])->name('addRating');



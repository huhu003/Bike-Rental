<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\BikeDetailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontpageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;

use Illuminate\Http\Request;

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
		return view('frontpage');
	});

	Auth::routes();
	Route::get('about-us', function () {
		return view('user.about-us');
	});

	Route::get('contact', function () {
		return view('user.contact');
	});
	

	
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

//Route::get('/dashboard', [AdminController::class, 'index'])->name('home');

 Auth::routes(['verify'=>true]);

 
 
 //EMAIL VERIFICATION
Route::get('user/home',function(){
	return view('auth/login');
})->middleware(['auth','verified'])->name('user/home');

// SMS NOTIFY

Route::any('send-sms',[SmsController::class,'send']);

//=========================================USERS=============================================
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::get('Uprofile',[HomeController::class,'profile']);



//=============================================ADMIN=====================================
Route::get('admin/dashboard', 'App\Http\Controllers\AdminController@index')->name('admin/dashboard')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');
	

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('profileedit', function () {
		return view('pages.edit');
	})->name('profileedit');

	Route::get('usermanagement', function () {
		return view('pages.index');
	})->name('usermanagement');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

});

//KAILANGAN IFIX====== EDIT.PROFILE THEN PROFILECONTROLLER===========================================================

Route::get('editprofile',[ProfileController::class,'update']);

//==========================================BIKES=============================================
Route::resource('bike_details',BikeDetailController::class);
Route::get('allbikes',[BikeDetailController::class,'allbikes']);

Route::get('reg-users',[RegisterController::class,'reg-users']);
Route::get('withdriver',[BikeDetailController::class,'withdriver']);
Route::get('withoutdriver',[BikeDetailController::class,'withoutdriver']);

Route::get('upload-bike',[BikeDetailController::class,'create']);
Route::get('bike-listing',[BikeDetailController::class,'index']);
Route::get('bikedetail/{bike_details}',[BikeDetailController::class,'show']);
Route::get('myposts/{bike_details}',[BikeDetailController::class,'userpost']);
Route::get('editbike/{BikeDetail}',[BikeDetailController::class,'edit']);
Route::get('deletebike/{bike_details}',[BikeDetailController::class,'destroy']);
Route::get('updatebike/{bike_details}',[BikeDetailController::class,'update']);

//::get('booking/{bike_details}',[BookingController::class, 'booking']);


Route::get('checkout/{bike_details}',[CheckoutController::class, 'checkout'])->name('checkout');
Route::post('checkout',[CheckoutController::class, 'afterpayment'])->name('checkout.credit-card');


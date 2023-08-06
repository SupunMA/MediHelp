<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\admin_HomeCtr;
use App\Http\Controllers\Admin\admin_PlanCtr;
use App\Http\Controllers\Admin\admin_TimeCtr;
use App\Http\Controllers\Admin\admin_ClientCtr;
use App\Http\Controllers\Admin\admin_PaymentCtr;
use App\Http\Controllers\UpdateProfile;

use App\Http\Controllers\Admin\admin_TransactionCtr;

use App\Http\Controllers\Home\homePageController;


use App\Http\Controllers\User\userController;
use App\Http\Controllers\Manager\managerController;
use App\Http\Controllers\Checker\checkerController;

use Illuminate\Support\Facades\Auth;

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


Route::get('/', [homePageController::class, 'index'])->name('welcome');

Route::get('signup', [homePageController::class, 'register2'])->name('register2');
Route::POST('registering', [RegisterController::class, 'addingClient'])->name('registering');

//Preventing go back
Route::middleware(['middleware'=>'lockBack'])->group(function(){
    Auth::routes();
});


//admin
Route::group(['prefix'=>'Admin','middleware'=>['checkAdmin','auth','lockBack']],function(){
    Route::get('/', [admin_HomeCtr::class, 'checkAdmin'])->name('admin.home');

    Route::get('AddClient', [admin_ClientCtr::class, 'addClient'])->name('admin.addClient');
    Route::get('AllClient', [admin_ClientCtr::class, 'allClient'])->name('admin.allClient');
    Route::POST('addingClient', [RegisterController::class, 'addingClient'])->name('admin.addingClient');
    Route::get('client/delete/{userID}', [admin_ClientCtr::class, 'deleteClient'])->name('admin.deleteClient');
    Route::post('client/update', [admin_ClientCtr::class, 'updateClient'])->name('admin.updateClient');
    
    Route::get('AddStaff', [admin_ClientCtr::class, 'addStaff'])->name('admin.addStaff');
    Route::get('AllStaff', [admin_ClientCtr::class, 'allStaff'])->name('admin.allStaff');
    Route::POST('addingStaff', [RegisterController::class, 'addingStaff'])->name('admin.addingStaff');
    Route::get('staff/delete/{ID}', [admin_ClientCtr::class, 'deleteStaff'])->name('admin.deleteStaff');
    Route::post('staff/update', [admin_ClientCtr::class, 'updateStaff'])->name('admin.updateStaff');

    Route::get('/myProfile', [UpdateProfile::class, 'StaffViewUpdateProfile'])->name('StaffProfileUpdate');
    Route::post('/updatingProfile', [UpdateProfile::class, 'StaffUpdateProfile'])->name('StaffProfileUpdating');


    Route::get('AddPlan', [admin_planCtr::class, 'addPlan'])->name('admin.addPlan');
    Route::get('AllPlan', [admin_planCtr::class, 'allPlan'])->name('admin.allPlan');
    Route::POST('addingPlan', [admin_planCtr::class, 'addingPlan'])->name('admin.addingPlan');
    Route::get('plan/delete/{planID}', [admin_planCtr::class, 'deletePlan'])->name('admin.deletePlan');
    Route::post('plan/update', [admin_planCtr::class, 'updatePlan'])->name('admin.updatePlan');

//Timetable View
    Route::get('allTimeTable', [admin_TimeCtr::class, 'allTimeTable'])->name('admin.allTimeTable');


    //paymentView
    Route::get('pendingPayment', [admin_PaymentCtr::class, 'pendingPaymentList'])->name('admin.pendingPaymentList');
    Route::POST('approvePayment', [admin_PaymentCtr::class, 'approvePayment'])->name('admin.approvePayment');

    Route::get('approvedPayment', [admin_PaymentCtr::class, 'approvedPayment'])->name('admin.approvedPayment');
    Route::get('DeclinedPayment', [admin_PaymentCtr::class, 'DeclinedPayment'])->name('admin.DeclinedPayment');
    //current Month
    Route::get('currentMonthTable', [admin_PaymentCtr::class, 'currentMonthTable'])->name('admin.currentMonthTable');

    //View Ratings
    Route::get('allRatings', [admin_TimeCtr::class, 'allRatings'])->name('admin.allRatings');

    
});

//user
Route::group(['prefix'=>'Account/Client','middleware'=>['checkUser','auth','lockBack']],function(){
    Route::get('/', [userController::class, 'checkUser'])->name('user.home');
    
    //update user profile
    Route::get('/myProfile', [UpdateProfile::class, 'CustomerViewUpdateProfile'])->name('CustomerProfileUpdate');
    Route::post('/updatingProfile', [UpdateProfile::class, 'CustomerUpdateProfile'])->name('CustomerProfileUpdating');

    //Delete user profile
    Route::get('user/delete/{ID}', [userController::class, 'deleteUser'])->name('user.deleteProfile');

    //View Plans
    Route::get('/CustomerAllPlans', [userController::class, 'allPlanView'])->name('CustomerAllPlanView');
    
    //Select Plan
    Route::post('/CustomerSelectPlans', [userController::class, 'CustomerSelectPlan'])->name('selectPlan');

    //view make payment 
    Route::get('/makePayments', [userController::class, 'makePaymentsView'])->name('CustomerMakePaymentsView');
    Route::POST('/makingPayments', [userController::class, 'makePayments'])->name('CustomerMakePayments');

    //Booking
    Route::POST('/bookingTime', [userController::class, 'bookingTime'])->name('CustomerBookingTime');

    //Coach Review
    Route::POST('/review/coach', [userController::class, 'coachReview'])->name('coachReview');

    //
   
    Route::POST('clientPayment/delete', [userController::class, 'deletePayment'])->name('user.deletePayment');
    
});


//Manager
Route::group(['prefix'=>'Account/Manager','middleware'=>['checkManager','auth','lockBack']],function(){
    Route::get('/', [managerController::class, 'checkManager'])->name('manager.home');
    
});





//Disabled User Registration

Route::post('/register', function() {
    return redirect('/register');
});


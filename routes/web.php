<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\admin_HomeCtr;

use App\Http\Controllers\Admin\admin_PatientCtr;
use App\Http\Controllers\Admin\admin_DoctorCtr;
use App\Http\Controllers\Admin\admin_AvailableTestCtr;
use App\Http\Controllers\Admin\admin_TestsCtr;
use App\Http\Controllers\Admin\admin_ReportsCtr;
use App\Http\Controllers\Admin\admin_ProfileCtr;
use App\Http\Controllers\Admin\admin_ClientCtr;

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

//Homepage
Route::get('/', [homePageController::class, 'index'])->name('welcome');

//Register through HomePage
Route::get('signup', [homePageController::class, 'register2'])->name('register2');
Route::POST('registering', [RegisterController::class, 'addingClient'])->name('registering');

//Preventing go back
Route::middleware(['middleware'=>'lockBack'])->group(function(){
    Auth::routes();
});


//admin
Route::group(['prefix'=>'Admin','middleware'=>['checkAdmin','auth','lockBack']],function(){
    Route::get('/', [admin_HomeCtr::class, 'checkAdmin'])->name('admin.home');

    // Patients
    Route::get('AddPatient', [admin_PatientCtr::class, 'addPatient'])->name('admin.addPatient');
    Route::POST('addingPatient', [RegisterController::class, 'addingPatient'])->name('admin.addingPatient');
    Route::get('AllPatient', [admin_PatientCtr::class, 'allPatient'])->name('admin.allPatient');
    Route::get('patient/delete/{userID}', [admin_PatientCtr::class, 'deletePatient'])->name('admin.deletePatient');
    Route::post('patient/update', [admin_PatientCtr::class, 'updatePatient'])->name('admin.updatePatient');

    //Doctors
    Route::get('AddDoctor', [admin_DoctorCtr::class, 'addDoctor'])->name('admin.addDoctor');
    Route::POST('addingDoctor', [RegisterController::class, 'addingDoctor'])->name('admin.addingDoctor');
    Route::get('AllDoctor', [admin_DoctorCtr::class, 'allDoctor'])->name('admin.allDoctor');
    Route::get('doctor/delete/{userID}', [admin_DoctorCtr::class, 'deleteDoctor'])->name('admin.deleteDoctor');
    Route::post('doctor/update', [admin_DoctorCtr::class, 'updateDoctor'])->name('admin.updateDoctor');

    //Available Test
    Route::get('AddAvailableTest', [admin_AvailableTestCtr::class, 'addAvailableTest'])->name('admin.addAvailableTest');
    Route::POST('addingAvailableTest', [admin_AvailableTestCtr::class, 'addingAvailableTest'])->name('admin.addingAvailableTest');
    Route::get('AllAvailableTest', [admin_AvailableTestCtr::class, 'allAvailableTest'])->name('admin.allAvailableTest');
    Route::get('availableTest/delete/{ID}', [admin_AvailableTestCtr::class, 'deleteAvailableTest'])->name('admin.deleteAvailableTest');
    Route::post('availableTest/update', [admin_AvailableTestCtr::class, 'updateAvailableTest'])->name('admin.updateAvailableTest');

    //Test
    Route::get('AddTest', [admin_TestsCtr::class, 'addTest'])->name('admin.addTest');
    Route::POST('addingTest', [admin_TestsCtr::class, 'addingTest'])->name('admin.addingTest');
    Route::get('AllTest', [admin_TestsCtr::class, 'allTest'])->name('admin.allTest');
    Route::get('test/delete/{ID}', [admin_TestsCtr::class, 'deleteTest'])->name('admin.deleteTest');
    Route::post('test/update', [admin_TestsCtr::class, 'updateTest'])->name('admin.updateTest');

    //Report
    Route::get('AddReport', [admin_ReportsCtr::class, 'addReport'])->name('admin.addReport');
    Route::POST('addingReport', [admin_ReportsCtr::class, 'addingReport'])->name('admin.addingReport');
    Route::get('AllReport', [admin_ReportsCtr::class, 'allReport'])->name('admin.allReport');
    Route::get('report/delete/{ID}', [admin_ReportsCtr::class, 'deleteReport'])->name('admin.deleteReport');
    Route::post('report/update', [admin_ReportsCtr::class, 'updateReport'])->name('admin.updateReport');
    Route::get('report/view/{ID}', [admin_ReportsCtr::class, 'viewReport'])->name('admin.viewReport');
    
    

    //Profile
    Route::POST('updateAdmin', [admin_ProfileCtr::class, 'updateAdmin'])->name('admin.updateAdmin');
    Route::get('admin/delete/{userID}', [admin_ProfileCtr::class, 'deleteAdmin'])->name('admin.deleteAdmin');
 
    
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
    

    Route::get('patientReport/view/{ID}', [userController::class, 'viewReport'])->name('user.viewReport');
    
});


//Manager
Route::group(['prefix'=>'Account/Manager','middleware'=>['checkManager','auth','lockBack']],function(){
    Route::get('/', [managerController::class, 'checkManager'])->name('manager.home');
    
});





//Disabled User Registration

Route::post('/register', function() {
    return redirect('/register');
});
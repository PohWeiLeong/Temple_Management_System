<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/', 'welcome');
Auth::routes();

Route::get('/addDonation', function () {
    return view('addDonation');
});

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});

Route::get('logout', [LoginController::class,'logout']);

Route::get('/admin/addProvider', function () {
    return view('addProvider');
});
Route::post('/admin/addProvider/store', [App\Http\Controllers\ProviderController::class, 'add'])->name('addProvider');
Route::get('/admin/viewProvider', [App\Http\Controllers\ProviderController::class, 'view'])->name('viewProvider');

Route::get('/admin/addMaintenance', function () {
    return view('addMaintenance', ['providerID' => App\Models\Provider::all()]);
});
Route::post('/admin/addMaintenance/store', [App\Http\Controllers\MaintenanceController::class, 'add'])->name('addMaintenance');
Route::get('/admin/viewMaintenance', [App\Http\Controllers\MaintenanceController::class, 'view'])->name('viewMaintenance');

Route::get('/admin/addSponsor', function () {
    return view('addSponsor', ['userID' => App\Models\User::all()]);
});
Route::post('/admin/addSponsor/store', [App\Http\Controllers\SponsorController::class, 'add'])->name('addSponsor');
Route::get('/admin/viewSponsor', [App\Http\Controllers\SponsorController::class, 'view'])->name('viewSponsor');
Route::get('/admin/deleteSponsor/{id}', [App\Http\Controllers\SponsorController::class, 'delete'])->name('deleteSponsor');

Route::get('/admin/viewUser', [App\Http\Controllers\UserController::class, 'view'])->name('viewUser');
Route::get('/admin/deleteUser/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('deleteUser');

Route::get('/admin/addSupplier', function () {
    return view('addSupplier');
});
Route::post('/admin/addSupplier/store', [App\Http\Controllers\SupplierController::class, 'add'])->name('addSupplier');
Route::get('/admin/viewSupplier', [App\Http\Controllers\SupplierController::class, 'view'])->name('viewSupplier');

Route::get('/admin/addEvent', function () {
    return view('addEvent', ['supplierID' => App\Models\Supplier::all()]);
});
Route::post('/admin/addEvent/store', [App\Http\Controllers\EventController::class, 'add'])->name('addEvent');
Route::get('/admin/viewEvent', [App\Http\Controllers\EventController::class, 'view'])->name('viewEvent');
Route::get('/admin/editEvent/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('editEvent');
Route::post('/admin/updateEvent', [App\Http\Controllers\EventController::class, 'update'])->name('updateEvent');
Route::get('/admin/deleteEvent/{id}', [App\Http\Controllers\EventController::class, 'delete'])->name('deleteEvent');

Route::get('/admin/addActivity', function () {
    return view('addActivity', ['eventID' => App\Models\Event::all()]);
});
Route::post('/admin/addActivity/store', [App\Http\Controllers\ActivityController::class, 'add'])->name('addActivity');
Route::get('/admin/viewActivity', [App\Http\Controllers\ActivityController::class, 'view'])->name('viewActivity');
Route::get('/admin/editActivity/{id}', [App\Http\Controllers\ActivityController::class, 'edit'])->name('editActivity');
Route::post('/admin/updateActivity', [App\Http\Controllers\ActivityController::class, 'update'])->name('updateActivity');
Route::get('/admin/deleteActivity/{id}', [App\Http\Controllers\ActivityController::class, 'delete'])->name('deleteActivity');

Route::get('/admin/addCommittee', function () {
    return view('addCommittee');
});
Route::post('/admin/addCommittee/store', [App\Http\Controllers\TempleCommitteeController::class, 'add'])->name('addCommittee');
Route::get('/admin/viewCommittee', [App\Http\Controllers\TempleCommitteeController::class, 'view'])->name('viewCommittee');
Route::get('/admin/editCommittee/{id}', [App\Http\Controllers\TempleCommitteeController::class, 'edit'])->name('editCommittee');
Route::post('/admin/updateCommittee', [App\Http\Controllers\TempleCommitteeController::class, 'update'])->name('updateCommittee');

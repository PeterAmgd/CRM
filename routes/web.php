<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceuserController;

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

// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/editusers', function () {
//     return view('pages.editusers');
// });

Route::get('/loginuser', function () {
    return view('pages.userlogin');
});
Route::get('/error', function () {
    return view('pages.404');
});
Route::get('/modals', function () {
    return view('pages.modals');
});

Route::get('/departments', function () {
    return view('pages.departments');
});
Route::get('/ui', function () {
    return view('pages.ui');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');

//Users
Route::get('/SystemUsers', [UserController::class, 'index'])->name('Users')->middleware('auth');
Route::post('/ManageUsers', [UserController::class, 'create'])->name('addUsers')->middleware('auth');
Route::get('/User/{id}', [UserController::class, 'getuser'])->name('getOneUser')->middleware('auth');
Route::put('/update/{id}', [UserController::class, 'update'])->name('updateUser')->middleware('auth');
Route::delete('/removeUser/{id}', [UserController::class, 'destroy'])->name('reomveUser')->middleware('auth');
////////////////////////////////////////////

//departments
// Route::get('/departments', [DepartmentController::class, 'index'])->name('Deps')->middleware('auth');
// Route::post('/ManageDepart', [DepartmentController::class, 'create'])->name('addDeps')->middleware('auth');
// Route::get('/Depart/{id}', [DepartmentController::class, 'getuser'])->name('getOneDeps')->middleware('auth');
// Route::put('/updateDep/{id}', [DepartmentController::class, 'update'])->name('updateDep')->middleware('auth');
// Route::delete('/removeDepart/{id}', [DepartmentController::class, 'destroy'])->name('reomveDep')->middleware('auth');
// Route::get('/userDepart/{id?}', [DepartmentController::class, 'show_dep_users'])->name('userDep')->middleware('auth');


Route::resource('/departments', DepartmentController::class)->middleware('auth');
Route::get('/assigndep/{dep_ID?}/{id?}', [DepartmentController::class, 'assignDepartToUser'])->name('AssignDep')->middleware('auth');
Route::get('/removeUserDepart/{id?}', [DepartmentController::class, 'removeUserDepart'])->name('removeUserDep')->middleware('auth');


///////////////////////////////////////////////////////
Route::resource('/ServiceUser', ServiceuserController::class)->middleware('auth');



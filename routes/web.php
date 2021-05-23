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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/help', [App\Http\Controllers\Controller::class, 'help'])->name('help');



/* for Admins */
    // panel
    Route::get('/admins/panel', [App\Http\Controllers\AdminsController::class, 'panel'])->name('panel');

    /* types */
        // add type
        Route::get('/admins/add-type', [App\Http\Controllers\AdminsController::class, 'addTypeVeiw']);
        // add type confirm
        Route::post('/admins/add-type/confirm', [App\Http\Controllers\AdminsController::class, 'addTypeCon']);
        // edit type list
        Route::get('/admins/edit-type-list', [App\Http\Controllers\AdminsController::class, 'editTypeList']);
        // edit type 
        Route::get('/admins/edit-type/{id}', [App\Http\Controllers\AdminsController::class, 'editTypeVeiw']);
        // edit type confirm
        Route::post('/admins/edit-type-confirm/{id}', [App\Http\Controllers\AdminsController::class, 'editTypeCon']);
        // delete type list
        Route::get('/admins/delete-type-list', [App\Http\Controllers\AdminsController::class, 'deleteTypeList']);
        // delete type 
        Route::get('/admins/delete-type/{id}', [App\Http\Controllers\AdminsController::class, 'deleteTypeVeiw']);
        // delete type confirm
        Route::post('/admins/delete-type-confirm/{id}', [App\Http\Controllers\AdminsController::class, 'deleteTypeCon']);
        // preview type
        Route::get('/admins/type/{id}', [App\Http\Controllers\AdminsController::class, 'typePreveiw']);

    /* sites */
        // add site
        Route::get('/admins/add-site', [App\Http\Controllers\AdminsController::class, 'addSiteVeiw']);
        // add site confirm
        Route::post('/admins/add-site/confirm', [App\Http\Controllers\AdminsController::class, 'addSiteCon']);
        // preview site
        Route::get('/admins/site/{id}', [App\Http\Controllers\AdminsController::class, 'sitePreveiw']);

    /* lists */
        Route::get('/admins/create-list', [App\Http\Controllers\AdminsController::class, 'createListVeiw']);

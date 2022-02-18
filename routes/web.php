<?php

use App\Http\Controllers\Clinical\ClinicalExampleController;

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

Auth::routes();

//////////////////////////////Appointment Form//////////////////////////////////
Route::group(['middleware' => 'web'], function() {
    Route::get('/', [ClinicalExampleController::class, 'specialties'])->name('specialties');
    Route::get('/professional/{specialty_id}', [ClinicalExampleController::class, 'professional'])->name('professional');
    Route::any('/add-scheduling', [ClinicalExampleController::class, 'addScheduling'])->name('add.scheduling');
    Route::fallback(function() {
        return redirect("/");
    });
});

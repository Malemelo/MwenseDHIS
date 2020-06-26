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

Route::get('/home', 'HomeController@index')->name('home');

// Patients routes

Route::get('/patients', 'PatientController@index')->name('patients');
Route::get('/new_patient', 'PatientController@create')->name('new_patient');
Route::post('/new_patient', 'PatientController@store')->name('add_patient');
Route::get('/edit_patients/{patient}', 'PatientController@edit')->name('edit_patients');
Route::patch('/update_patients/{patient}', 'PatientController@update')->name('update_patients');
Route::get('/delete/patient/{patient}', 'PatientController@deletePatient')->name('delete_patient');
//village
Route::get('/villages', 'VillageController@index')->name('villages');
Route::get('/new_village', 'VillageController@create')->name('new_village');
Route::post('/new_village', 'VillageController@store')->name('add_village');
Route::get('/edit_village/{village}', 'VillageController@edit')->name('edit_village');
Route::patch('/update_village/{village}', 'VillageController@update')->name('update_village');
Route::get('/delete/village/{village}', 'VillageController@deleteVillage')->name('delete_village');
//Non-communicable diseases
Route::get('/disease/non_communicables', 'NonCommunicableController@index')->name('non_communicables');
Route::get('/new/non_communicable', 'NonCommunicableController@create')->name('new_non_communicable');
Route::post('/new/non_communicable', 'NonCommunicableController@store')->name('add_non_communicable');
Route::get('/edit_non_communicable/{non_communicable}', 'NonCommunicableController@edit')->name('edit_non_communicable');
Route::patch('/update_non_communicable/{non_communicable}', 'NonCommunicableController@update')->name('update_non_communicable');
Route::get('/delete_non_communicable/{non_communicable}', 'NonCommunicableController@deleteDisease')->name('delete_non_communicable');
//facilities
Route::get('/facilities', 'HealthFacilityController@index')->name('facilities');
Route::get('/new_facility', 'HealthFacilityController@create')->name('new_facility');
Route::post('/add_facility', 'HealthFacilityController@store')->name('add_facility');
Route::get('/edit_facility/{facility}', 'HealthFacilityController@edit')->name('edit_facility');
Route::patch('/update_facility/{facility}', 'HealthFacilityController@update')->name('update_facility');
Route::get('/delete_facility/{facility}', 'HealthFacilityController@deleteFacility')->name('delete_facility');





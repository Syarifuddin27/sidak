<?php

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

    //shows the ajax test page
Route::get('/jumlah', 'PermintaanController@jumlah');


 Route::resource('ajax', 'AttController');
Route::post('/ajax/send', 'AttController@store');
//when ajax request
Route::resource('/simpan', 'KarPerminController');
Route::post('/ajax/send1', 'KarPerminController@store');
Route::post('/ajax/searchName', 'KaryawanController@index');
Route::post('/ajax/filterAbsen', 'KaryawanController@kAktif');
Route::post('/ajax/upStore', 'KarPerminController@upStore');
Route::post('/simpan/hapus{id}', 'KarPerminController@destroy');

// Route::post('simpan/permin',[
//     'uses' => 'KarPerminController@upStore',
//     'as' => 'sinpan.per' 
// ]);


Route::post('/ajax/send2', 'PerminController@store');



    
Route::resource('/att', 'AttController');
// Route::resource('/permintaan', 'PermintaanController');
// Route::get('/kryApi', 'KaryawanController@kryApi')->name('api.kry');
Route::get('api/karyawan', 'KaryawanController@apiKaryawan')->name('api.karyawan');
Route::get('api/kAktif', 'KaryawanController@kAktif')->name('karyawan.aktif');
Route::get('api/absensi', 'AbsensiController@ApiAbsen')->name('api.absen');
Route::get('api/absFront/{slug}', 'FrontEndController@ApiAbsenFront')->name('api.absFront');

Route::get('karya/json','KaryawanController@json');


Route::get('/history/{slug}',[
    'uses' => 'FrontEndController@singlePost',
    'as' => 'history.single'
]);

Route::get('events', 'EventController@index');

Route::get('/test', function () {
    // Flashy::message('Welcome To SIDAK');
    return view('karyawans.all');
});

Route::get('/tkAktif', function () {
    // Flashy::message('Welcome To SIDAK');
    return view('karyawans.kAktif');
});


Route::get('/abs', function () {
    return view('absensi.master');
});

Route::get('/cal', function () {
    return view('calender.index');
});


Route::get('karya','KaryawanController@index2');


Route::get('/', function () {
    // Flashy::message('Welcome To SIDAK');
    return view('welcome');
});
Route::get('/pdf/pdf', function () {
    return view('pdf.index');
});
// Route::get('/admin/pdf', 'KaryawanController@pDf');

Auth::routes();

Route::get('/daftar', 'InsSendiriController@create')->name('daftar');
Route::post('/daftar/store', 'InsSendiriController@store')->name('daftar.store');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/users', 'UserController');

    Route::get('/user/myProfile', [
        'uses' => 'ProfileController@myProfile',
        'as' => 'user.myProfile'
    ]);

    Route::get('/user/profile', [
        'uses' => 'ProfileController@index',
        'as' => 'user.profile'
    ]);
    Route::post('/user/profile/update', [
        'uses' => 'ProfileController@update',
        'as' => 'user.profile.update'
    ]);

    Route::resource('/karyawan', 'KaryawanController');
    Route::resource('/permintaan', 'PermintaanController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/jabatan', 'JabatanController');
    Route::resource('/docs', 'DocController');
    Route::resource('/absensi', 'AbsensiController');
    Route::resource('/pkwt', 'PkwtController');
    Route::resource('/sp', 'SpController');
    Route::resource('/kecelakaan', 'KecelakaanController');
    Route::resource('/konfir', 'KonfirController');
    Route::resource('/konOrder', 'VerifyOrderController');

});
// Route::get('/all/karyawan', 'ApiShowController@index');


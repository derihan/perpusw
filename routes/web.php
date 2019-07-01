<?php

// welcome
Route::get('/', function () {
    return view('welcome');
});

//auth
Auth::routes();

//register
Route::get('/home', 'HomeController@index')->name('home');

//login
Route::match(['get','post'],'/admin', 'adminController@login');

//dashboard
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard','adminController@dashboard');

    //data buku
    Route::get('/admin/masterData/data_buku','bukuController@data_buku')->name('databuku');
    Route::post('/admin/masterData/add_buku','bukuController@add')->name('addbuku');
    Route::get('/admin/masterData/hapus/{id}','bukuController@hapus');
    Route::get('/admin/masterData/edit/{id}','bukuController@edit');
    Route::post('/admin/masterData/edit_proc','bukuController@edit_proc')->name('edit');
});


//logout
Route::get('/logout','adminController@logout');
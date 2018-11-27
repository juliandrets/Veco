<?php

// Index routes -----------------------------------------------------------
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('index', 'HomeController@index');
Route::get('nosotros', 'HomeController@about');
Route::get('servicios', 'HomeController@services');

// Admin Panel ------------------------------------------------------------
Route::get('adm', 'AdminPanelController@index')->middleware('auth', 'role:admin');

    // Projects
    Route::resource('adm/projects', 'ProjectController');
    Route::get('proyecto/{id}', 'ProjectController@show');
    Route::get('proyectos', 'ProjectController@showProjects');
    Route::get('adm/projects/{id}/delete', 'ProjectController@destroy')->middleware('auth', 'role:admin');
    Route::get('adm/projects/{id}/edit', 'ProjectController@edit')->middleware('auth', 'role:admin');
    Route::post('adm/projects/{id}/update', 'ProjectController@update')->middleware('auth', 'role:admin');

    // Blog
    Route::resource('adm/blog', 'BlogController');
    Route::get('noticia/{id}', 'BlogController@show');
    Route::get('noticias', 'BlogController@showBlogs');
    Route::get('adm/blog/{id}/delete', 'BlogController@destroy')->middleware('auth', 'role:admin');
    Route::get('adm/blog/{id}/edit', 'BlogController@edit')->middleware('auth', 'role:admin');
    Route::post('adm/blog/{id}/update', 'BlogController@update')->middleware('auth', 'role:admin');

	// Pictures
	Route::resource('adm/pictures', 'PictureController');
	Route::get('adm/pictures/{id}/delete', 'PictureController@destroy')->middleware('auth', 'role:admin');
	Route::get('adm/pictures/{id}/edit', 'PictureController@edit')->middleware('auth', 'role:admin');
	Route::post('adm/pictures/{id}/update', 'PictureController@update')->middleware('auth', 'role:admin');

// Auth ------------------------------------------------------------------
Auth::routes();

//Route::get('/home', 'HomeController@index');//->name('index');

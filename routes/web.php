<?php

// Index routes -----------------------------------------------------------
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('index', 'HomeController@index');
Route::get('nosotros', 'HomeController@about');
Route::get('que-hacemos', 'HomeController@queHacemos');
//Route::get('servicios', 'HomeController@services');
Route::get('fabrica', 'HomeController@fabrica');
Route::get('contacto', 'HomeController@contacto');
Route::get('clientes', 'HomeController@clientes');
Route::get('showroom', 'HomeController@showroom');

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

	// Products Categories
    Route::resource('adm/products-categories', 'ProductCategoryController')->middleware('auth', 'role:admin');
    Route::get('adm/products-categories/{id}/delete', 'ProductCategoryController@destroy')->middleware('auth', 'role:admin');
    Route::get('adm/products-categories/{id}/edit', 'ProductCategoryController@edit')->middleware('auth', 'role:admin');
    Route::post('adm/products-categories/{id}/update', 'ProductCategoryController@update')->middleware('auth', 'role:admin');

	// Products
    Route::get('productos', 'HomeController@products');
    Route::get('productos/{name}', 'HomeController@showProducts');
    Route::get('producto/{id}', 'ProductController@show');
    Route::resource('adm/products', 'ProductController')->middleware('auth', 'role:admin');
    Route::get('adm/products/{id}/delete', 'ProductController@destroy')->middleware('auth', 'role:admin');
    Route::get('adm/products/{id}/edit', 'ProductController@edit')->middleware('auth', 'role:admin');
    Route::post('adm/products/{id}/update', 'ProductController@update')->middleware('auth', 'role:admin');

	// Newsletter
        Route::get('newsletter', 'HomeController@newsletter');
        Route::post('newsletter/suscripcion', 'NewsletterEmailController@store');

        // ADM
        Route::resource('adm/newsletter', 'NewsletterController')->middleware('auth', 'role:admin');
        Route::get('adm/newsletter/create', 'NewsletterController@create')->middleware('auth', 'role:admin');

        // Emails
        Route::resource('adm/newsletter-emails', 'NewsletterEmailController')->middleware('auth', 'role:admin');
        Route::get('adm/newsletter-emails/{id}/delete', 'NewsletterEmailController@destroy')->middleware('auth', 'role:admin');// Email related routes
        Route::post('adm/newsletter/mail/send/{class}/{id}', 'MailController@send')->middleware('auth', 'role:admin');

// Auth ------------------------------------------------------------------
Auth::routes();

//Route::get('/home', 'HomeController@index');//->name('index');

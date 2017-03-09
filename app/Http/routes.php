<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Pagrindinis puslapis
|--------------------------------------------------------------------------
*/

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home',
]);

/*
|--------------------------------------------------------------------------
| Registracija
|--------------------------------------------------------------------------
*/

Route::post('/registracija', [
    'uses' => 'AuthController@postRegister',
    'as' => 'auth.register',
    'middleware' => ['guest'],
]);

/*
|--------------------------------------------------------------------------
| Prisijungimas
|--------------------------------------------------------------------------
*/

Route::post('/prisijungti', [
    'uses' => 'AuthController@postLogin',
    'as' => 'auth.login',
    'middleware' => ['guest'],
]);

/*
|--------------------------------------------------------------------------
| Atsijungimas
|--------------------------------------------------------------------------
*/

Route::get('/atsijungti', [
    'uses' => 'AuthController@logout',
    'as' => 'auth.logout',
    'middleware' => ['auth'],
]);

/*
|--------------------------------------------------------------------------
| Profilis ir jo nustatymai
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function() {

    Route::get('/profilis', [
        'uses' => 'ProfileController@index',
        'as' => 'profile.home',
    ]);

    Route::get('/uzsakymai', [
        'uses' => 'ProfileController@getOrders',
        'as' => 'profile.orders',
    ]);

    Route::get('/adresai', [
        'uses' => 'ProfileController@getAddresses',
        'as' => 'profile.addresses',
    ]);

    Route::get('/prideti-adresa', [
        'uses' => 'ProfileController@getAddAddress',
        'as' => 'profile.add.address',
    ]);

    Route::post('/prideti-adresa', [
        'uses' => 'ProfileController@postAddAddress',
    ]);

    Route::get('/redaguoti-adresa/{id}', [
        'uses' => 'ProfileController@getEditAddress',
        'as' => 'profile.edit.address',
    ]);

    Route::post('/redaguoti-adresa/{id}', [
        'uses' => 'ProfileController@postEditAddress',
    ]);

    Route::get('/trinti-adresa/{id}', [
        'uses' => 'ProfileController@destroy',
        'as' => 'profile.destroy.address'
    ]);

    Route::get('/nustatymai', [
        'uses' => 'ProfileController@getSettings',
        'as' => 'profile.settings',
    ]);

    Route::post('/nustatymai', [
        'uses' => 'ProfileController@postSettings',
    ]);

});

/*
|--------------------------------------------------------------------------
| Administracijos panelė
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', [
        'uses' => 'AdminController@index',
        'as' => 'admin.home',
    ]);

});

/*
|--------------------------------------------------------------------------
| Produktų trinimas, redagavimas..
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin/produktai', [
        'uses' => 'ProductsController@index',
        'as' => 'admin.products',
    ]);

    Route::get('/admin/naujas-produktas', [
        'uses' => 'ProductsController@getNewProduct',
        'as' => 'admin.new.product',
    ]);

    Route::post('/admin/naujas-produktas', [
        'uses' => 'ProductsController@postNewProduct',
    ]);

    Route::get('/admin/redaguoti-produkta/{id}', [
        'uses' => 'ProductsController@getEditProduct',
        'as' => 'admin.edit.product',
    ]);

    Route::post('/admin/redaguoti-produkta/{id}', [
        'uses' => 'ProductsController@postEditProduct',
    ]);

    Route::get('/admin/trinti-produkta/{id}', [
        'uses' => 'ProductsController@deleteProduct',
        'as' => 'admin.delete.product',
    ]);

});

/*
|--------------------------------------------------------------------------
| Kategorijų trinimas, redagavimas..
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin/kategorijos', [
        'uses' => 'CategoryController@index',
        'as' => 'admin.categories',
    ]);

    Route::get('/admin/kurti-kategorija', [
        'uses' => 'CategoryController@getNewCategory',
        'as' => 'admin.new.category',
    ]);

    Route::post('/admin/kurti-kategorija', [
        'uses' => 'CategoryController@postNewCategory',
    ]);

    Route::get('/admin/redaguoti-kategorija/{id}', [
        'uses' => 'CategoryController@getEditCategory',
        'as' => 'admin.edit.category',
    ]);

    Route::post('/admin/redaguoti-kategorija/{id}', [
        'uses' => 'CategoryController@postEditCategory',
    ]);

    Route::get('/admin/trinti-kategorija/{id}', [
        'uses' => 'CategoryController@deleteCategory',
        'as' => 'admin.delete.category',
    ]);

});

/*
|--------------------------------------------------------------------------
| Krepšelio peržiūra ir pirkimas
|--------------------------------------------------------------------------
*/

Route::get('/krepselis', [
    'uses' => 'CartController@index',
    'as' => 'cart',
]);

Route::get('/pasalinti-preke/{id}', [
    'uses' => 'CartController@deleteItem',
    'as' => 'cart.delete',
]);

Route::get('/prideti-i-krepseli/{id}', [
    'uses' => 'CartController@getAddToCart',
    'as' => 'product.addToCart',
]);

Route::get('/uzsakyti', [
    'uses' => 'CartController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/uzsakyti', [
    'uses' => 'CartController@postCheckout',
]);

/*
|--------------------------------------------------------------------------
| Apie mus
|--------------------------------------------------------------------------
*/

Route::get('/apie-mus', [
    'uses' => 'AboutUsController@index',
    'as' => 'aboutus',
]);

/*
|--------------------------------------------------------------------------
| Kontaktai
|--------------------------------------------------------------------------
*/

Route::get('/kontaktai', [
    'uses' => 'ContactsController@index',
    'as' => 'contacts',
]);

/*
|--------------------------------------------------------------------------
| Terminai ir sąlygos
|--------------------------------------------------------------------------
*/

Route::get('/terminai-ir-salygos', [
    'uses' => 'TermsController@index',
    'as' => 'terms',
]);

/*
|--------------------------------------------------------------------------
| Produktai pagal kategoriją
|--------------------------------------------------------------------------
*/

Route::get('/{category}', [
    'uses' => 'CategoryController@getProductsByCategory',
    'as' => 'category',
]);

/*
|--------------------------------------------------------------------------
| Produkto peržiūra
|--------------------------------------------------------------------------
*/

Route::get('/{category}/{slug}', [
    'uses' => 'ProductsController@getProduct',
    'as' => 'product.home',
]);
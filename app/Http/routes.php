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

Route::group([
    'namespace'=>'Frontend',
    'domain'=>env('HTTP_DOMAIN')
], function(){

    Route::get('/', function(){
       return view('welcome');
    });

    Route::controller('auth', 'Auth\AuthController');
    Route::controller('password', 'Auth\PasswordController');

    if(file_exists(app_path('Http/Controllers/Frontend/TestController.php')))
    {
        Route::controller('test', 'TestController');
    }
});

Route::group([
    'namespace'=>'Backend',
    'domain'=>env('ADMIN_DOMAIN')
], function(){

    Route::controller('auth', 'Auth\AuthController');
    Route::controller('password', 'Auth\PasswordController');
    Route::group([
        'middleware' => 'admin.auth'
    ], function(){
        Route::get('/', 'DashboardController@getIndex');
        Route::controller('dash', 'DashboardController');
//        Route::controller('goods', 'GoodsController');
        Route::resources([
            'category' => 'CategoryController',
            'goods' => 'GoodsController',
            'brand' => 'BrandController',
            'goodstype' => 'GoodstypeController'
        ]);
//        Route::controller('brand', 'BrandController');
//        Route::controller('goodstype', 'GoodstypeController');
    });
    if(file_exists(app_path('Http/Controllers/Backend/TestController.php')))
    {
        Route::controller('test', 'TestController');
    }
});
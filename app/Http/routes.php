<?php

Route::get('/login',
    ['as' => 'auth.login',
     'uses' => 'LoginController@getLogin'
    ]);
Route::post('/postLogin', [
    'as' => 'auth.postLogin',
    'uses' => 'LoginController@postLogin']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['as' => 'auth.home', function () { return view('home'); }]);





Route::group(['middleware' => 'auth'], function () {
    Route::get('/resource', ['as' => 'resource','middleware' => 'auth', function () {
        return view('resource');

//  Route::get('/patata', ['as' => 'patata','uses' => 'PatataController@getPatata']);

//  Route::get('/example', ['as' => 'example','uses' => 'ExampleController@getExample']);

    }]);

    Route::get('/phpinfo', function() {
        return phpinfo();
    });
});

Route::get('/flushSession',
    ['as' => 'session.flush',
     function() {
            Session::flush();
    }]
);

Route::get('/register',
    ['as' => 'register.register',
        'uses' => 'RegisterController@getRegister']
);

Route::post('/register',
    ['as' => 'register.postRegister',
        'uses' => 'RegisterController@postRegister']
);

Route::get('/checkEmailExists',
    ['as' => 'checkEmailExists',
     'uses' => 'ApiController@checkEmailExists']
);



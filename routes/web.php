<?php

use App\Events\UserWasBanned;


Route::get('/', function () {
    //fire Event 2 ways global variable or Fasade
//    Event::fire('UserWasBanned', []);
    $user = new  App\User;
    event(new UserWasBanned($user));
//    return view('welcome');

//   dd( app('Illuminate\Contracts\Config\Repository'));
//   dd( app('Illuminate\Config\Repository')['database']['default']);
//   dd( app('Illuminate\Contracts\Config\Repository')['database']['default']); //also we have a keyword == 'config
//   dd( app('config')['database']['default']);

    dd(app()['config']['database']['default']);
});


Route::get('test', 'WelcomeController@test');
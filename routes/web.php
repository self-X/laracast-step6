<?php

use App\Events\UserWasBanned;


Route::get('/', function () {
    //fire Event 2 ways global variable or Fasade
//    Event::fire('UserWasBanned', []);
    $user = new  App\User;
    event(new UserWasBanned($user));
    return view('welcome');
});

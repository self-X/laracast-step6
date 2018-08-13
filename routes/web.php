<?php

use App\Events\UserWasBanned;
use App\User;

Route::get('/blade', function(){
    //в AppServiceProvider смотри
    //php artisan view:clear (скоерй всего кеш чистит после него все стили перезагруажет)
    return view('custom')->with('user', App\User::find(1));
});

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

Route::get('reports', 'ReportsController@index');

Route::get('test', 'WelcomeController@test');

Route::get('login', function (){

    User::truncate();

   $user = User::Create([
        'name'  => 'JohnDoe',
        'email' => 'john@ex.com',
        'password' => bcrypt('password'),
        'plan' => 'yearly',
    ]);

    \Auth::login($user);

    return redirect('/');
});


Route::get('middlewaretest', ['middleware' => 'subscribed:yearly', function(){
    //$this->>middleware('subscribed:yearly,two,three);  -если контроллер через : параметры,

    return 'Subscribtion only page if you have a monthly plan';

}]);


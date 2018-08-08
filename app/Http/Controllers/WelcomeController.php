<?php

namespace App\Http\Controllers;

//use Illuminate\Config\Repository;
use Illuminate\Contracts\Config\Repository; //вот она разница, мы сейчас взяли контракт репозитория а не его реализацию
use Illuminate\Http\Request;
use Config; //facade

class WelcomeController extends Controller
{
    protected $config;

    //constructor injection
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    public function test(Repository $config) //method injection
    {
        /*4 способа работы с конфигом Ларавел*/

        /*constructor injection
                return $this->config->get('database.default');
        */

        /*method injection
        return $config->get('database.default');
        */

        /*facade
        return \Config::get('database.default');
        */
        /*config helper function
        return app('config')['database']['default']; //like in symfony

        return config('database.default'); //recommended
         */

    }
}

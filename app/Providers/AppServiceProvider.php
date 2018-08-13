<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('hello', function($expression){
            return "<?= 'hellor ' . $expression; ?>";
        });
        Blade::directive('ago', function($expression){
            dump($expression); //$user
            return "<?= 'user: ' . $expression  ?>"; //развернет объект
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

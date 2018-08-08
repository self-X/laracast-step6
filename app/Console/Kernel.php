<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //'App\Console\Commands\Sample'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        //fire php artisan sample
        $schedule->command('laracasts:sample')->at('11:30');
            //daily or daily at specific time
            //also we have a exec command
            //behind the sceence  we have cron() method which implement expression obj with a string like * * * 0 * or smt like dat
            //also we have a wrappers like monhtly daily etc..
            //in laravel 5.1 maybe it was a service provider which boot a specific class
        //examples
        // $schedule->exec("thouch foo.txt")->everyFiveMinutes(); //dailyAt daile at.
        // $schedule->command('laracasts:sample')->monthly();
        //also I have a perfect article about that
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Sample extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() //you colud inject modules right here
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() //and here will be a busines logic, in example it`s returns a new object of foo class
    {
        //
    }
}

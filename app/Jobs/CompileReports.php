<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CompileReports implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reportsId;
    protected $type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reportsId, $type)
    {
        $this->reportsId = $reportsId;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // var_dump('Compiling the'.$this->type.' reports with the id '. $this->reportsId .'  within the Job Class');
        var_dump(sprintf('Compiling the %s reports with the id %s  within the Job Class', $this->type, $this->reportsId));
    }
}

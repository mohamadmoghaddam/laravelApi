<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CalculateDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $x;

    public function __construct($x)
    {
        $this->x = $x;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        for ($x = 1; $x <= 5; $x++) {
            sleep(2);
            // do calculation
        }
    }
}

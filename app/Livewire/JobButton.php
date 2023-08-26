<?php

namespace App\Livewire;

use Livewire\Component;
use App\Jobs\CalculateDataJob;

class JobButton extends Component
{
    public function render()
    {
        return view('livewire.job-button');
    }

    public function runJob()
    {
        for ($x = 1; $x <= 10; $x++) {
            CalculateDataJob::dispatch($x);
       }
    }
}

<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Birthday\Jobs\ListBirthdaysJob;

class ListBirthdaysFeature extends Feature
{
    public function handle(Request $request)
    {
        $this->run(ListBirthdaysJob::class);
    }
}

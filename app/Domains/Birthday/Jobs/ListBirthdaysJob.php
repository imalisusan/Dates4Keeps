<?php

namespace App\Domains\Birthday\Jobs;

use Lucid\Units\Job;
use App\Models\Birthday;

class ListBirthdaysJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $birthdays = Birthday::all();
        return view('birthdays.index', compact('birthdays'));   
    }
}

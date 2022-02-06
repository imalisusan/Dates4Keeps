<?php

namespace App\Domains\Birthday\Jobs;

use Lucid\Units\Job;
use App\Models\Birthday;

class SaveBirthdayJob extends Job
{
    private $name;
    private $date;
    private $description;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $date, $description)
    {
        $this->name = $name;
        $this->date = $date;
        $this->description = $description;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $attributes = [
            'name' => $this->name,
            'date' => $this->date,
            'description' => $this->description,
        ];

        return tap(new Birthday($attributes))->save();
    }
}

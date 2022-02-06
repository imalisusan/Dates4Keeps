<?php

namespace App\Features;

use Lucid\Units\Feature;
use Illuminate\Http\Request;
use App\Domains\Birthday\Jobs\SaveBirthdayJob;
use App\Domains\Birthday\Requests\AddBirthday;

class AddBirthdayFeature extends Feature
{
    public function handle(AddBirthday $request)
    {
        $this->run(SaveBirthdayJob::class, [
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'description' => $request->input('description'),
        ]);
    }
}

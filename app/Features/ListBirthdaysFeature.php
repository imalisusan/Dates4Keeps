<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Birthday\Jobs\ListBirthdaysJob;

class ListBirthdaysFeature extends Feature
{
    public function handle(Request $request)
    {
        $birthdays = Birthday::all();
        return view('birthdays.index', compact('birthdays')); 
    }
}

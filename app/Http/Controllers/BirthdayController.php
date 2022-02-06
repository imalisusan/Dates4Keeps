<?php

namespace App\Http\Controllers;

use Lucid\Units\Controller;
use App\Features\AddBirthdayFeature;
use App\Features\ListBirthdaysFeature;

class BirthdayController extends Controller
{

    public function add()
    {
        return $this->serve(AddBirthdayFeature::class);
    }

    public function birthdays()
    {
        return $this->serve(ListBirthdaysFeature::class);
    }
}

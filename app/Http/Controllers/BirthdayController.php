<?php

namespace App\Http\Controllers;

use Lucid\Units\Controller;
use App\Features\AddBirthdayFeature;
use App\Features\ViewBirthdayFeature;

class BirthdayController extends Controller
{

    public function add()
    {
        return $this->serve(AddBirthdayFeature::class);
    }

    public function view()
    {
        return $this->serve(ViewBirthdayFeature::class);
    }
}

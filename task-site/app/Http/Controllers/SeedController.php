<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\Http\Requests;
use Artisan;

class SeedController extends Controller
{

    public function createSeed(Request $request)
    {
        Artisan::call('db:seed');

        return view('home');
    }
}

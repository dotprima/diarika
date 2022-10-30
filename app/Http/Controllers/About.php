<?php

namespace App\Http\Controllers;
use App\Models\Homes;
use Illuminate\Http\Request;

class About extends Controller
{
    public function index()
    {
        $home = Homes::first();
        return view('about', [
            'home' => $home
        ]);
    }
}

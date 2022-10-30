<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homes;
class Contact extends Controller
{
    public function index()
    {
        $home = Homes::first();
        return view('contact', [
            'user' => 'ss',
            'home' => $home
        ]);
    }
}

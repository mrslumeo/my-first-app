<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index(Request $request)
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about', [
            'firstname'=> 'Jumoke',
            'lastname' => 'Lumeo',
            'html' => '<p><strong>This is my Bio</strong></p>'
        ]);
    }
}

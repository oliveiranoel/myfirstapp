<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome')->with([
            'foo' => 'bar'
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}

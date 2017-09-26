<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {

        return view('pages.about');

    }

    public function requestATemplate()
    {

        return view('pages.request-a-template');

    }

    public function contact()
    {

        return view('pages.contact');

    }

    public function terms()
    {

        return view('pages.terms');

    }

}

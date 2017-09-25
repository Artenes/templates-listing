<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request)
    {

        return back()->with('status', 'Thanks for getting in touch, we will answer you in about 1 hour');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function store(Request $request)
    {

        return back()->with('status', 'Thanks for the request, in about 1 hour we will send to your email a link to buy the requested template');

    }

}

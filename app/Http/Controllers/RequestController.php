<?php

namespace App\Http\Controllers;

use App\Notifications\TemplateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class RequestController extends Controller
{

    public function store(Request $request)
    {

        Notification::route('mail', config('app.email'))->notify(new TemplateRequest(
            $request->get('email'),
            $request->get('template')
        ));

        return back()->with('status', 'Thanks for the request, in about 1 hour we will send to your email a link to buy the requested template');

    }

}

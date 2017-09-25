<?php

namespace App\Http\Controllers;

use App\Notifications\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{

    public function store(Request $request)
    {

        Notification::route('mail', config('app.email'))->notify(new ContactMessage(
            $request->get('email'),
            $request->get('message')
        ));

        return back()->with('status', 'Thanks for getting in touch, we will answer you in about 1 hour');

    }

}

<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function show($slug)
    {

        return view('checkout.buy', ['template' => Template::findOrFailBySlug($slug)]);

    }

    public function store($slug)
    {

        $template = Template::findOrFailBySlug($slug);

        return view('checkout.bought', ['template' => $template]);

    }

}

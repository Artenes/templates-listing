<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;

class TemplatesController extends Controller
{

    public function index()
    {

        return view('templates.index', ['templates' => Template::all()]);

    }

    public function show($slug)
    {

        return view('templates.show', ['template' => Template::findOrFailBySlug($slug)]);

    }

}

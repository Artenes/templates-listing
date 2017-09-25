<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;

class TemplatesController extends Controller
{

    public function showIndex()
    {

        return view('templates.index');

    }

    public function index(Request $request)
    {

        return response()->json(Template::search($request->get('s', '')));

    }

    public function demo($slug)
    {

        return view('templates.show', ['template' => Template::findOrFailBySlug($slug)]);

    }

    public function show($slug)
    {

        return response()->json([

            'template' => Template::findOrFailBySlug($slug)->toArray(),

        ]);

    }

}

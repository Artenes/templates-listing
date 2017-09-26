<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

<section class="hero is-primary is-medium">

    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item logo" href="/">
                        XipGate
                    </a>
                </div>
                <span class="nav-toggle">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                <div class="nav-right nav-menu">
                    <a class="nav-item {{ Request::is('/') ? 'is-active' : '' }}" href="{{ route('templates.index') }}">
                        Templates
                    </a>
                    <a class="nav-item {{ Request::is('pages/about') ? 'is-active' : '' }}" href="{{ route('pages.about') }}">
                        About
                    </a>
                    <a class="nav-item {{ Request::is('pages/request-a-template') ? 'is-active' : '' }}" href="{{ route('pages.requestATemplate') }}">
                        Request a template
                    </a>
                    <a class="nav-item {{ Request::is('pages/contact') ? 'is-active' : '' }}" href="{{ route('pages.contact') }}">
                        Contact
                    </a>
                </div>
            </div>
        </header>
    </div>

    @yield('hero-body')

</section>

@if(session()->has('status'))
    <div class="notification is-success">
        {{ session()->get('status') }}
    </div>
@endif

@yield('body')

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p class="has-text-white">
                <strong class="has-text-white">XipGate</strong> all rights reserved. Copyright {{ date('Y') }}.
                <a href="{{ route('pages.terms') }}">Terms and conditions</a>.
            </p>
        </div>
    </div>
</footer>

</body>
</html>

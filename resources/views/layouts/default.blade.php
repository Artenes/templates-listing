<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grid Gallery - Free Bulma template</title>
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
                    <a class="nav-item" href="{{ route('pages.about') }}">
                        About
                    </a>
                    <a class="nav-item" href="{{ route('pages.askForTemplate') }}">
                        Ask for a template
                    </a>
                    <a class="nav-item" href="{{ route('pages.contact') }}">
                        Contact
                    </a>
                </div>
            </div>
        </header>
    </div>

    @yield('hero-body')

</section>

@yield('body')

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
            <p>
                <a class="icon" href="https://github.com/jgthms/bulma">
                    <i class="fa fa-github"></i>
                </a>
            </p>
        </div>
    </div>
</footer>

</body>
</html>

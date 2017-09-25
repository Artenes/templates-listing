@extends('layouts.default')

@section('hero-body')

    <div class="hero-body with-black-pattern">
        <div class="container has-text-centered">
            <h1 class="title main-title">
                The chepeast templates on the internet
            </h1>
            <h2 class="subtitle">
                premium templates for half the price of other stores
            </h2>
        </div>
    </div>

@endsection

@section('body')

    <div class="section with-white-pattern">

        <div id="app">

            <search></search>

        </div>

    </div>

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

    <script type="text/javascript" src="{{ asset('js/search.js') }}"></script>

@endsection

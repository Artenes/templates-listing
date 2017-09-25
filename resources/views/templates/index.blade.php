@extends('layouts.default')

@section('hero-body')

    <div class="hero-body with-black-pattern">
        <div class="container has-text-centered">
            <h1 class="title main-title">
                The chepeast premium templates on the internet
            </h1>
            <h2 class="subtitle">
                premium templates for less than half the price of other stores
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

    <script type="text/javascript" src="{{ asset('js/search.js') }}"></script>

@endsection

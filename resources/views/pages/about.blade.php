@extends('layouts.default')

@section('hero-body')

    <div class="hero-body with-black-pattern">
        <div class="container has-text-centered">
            <h1 class="title main-title">
                About XipGate
            </h1>
            <h2 class="subtitle">
                How exactly does this works?
            </h2>
        </div>
    </div>

@endsection

@section('body')

    <div class="section">

        @include('partials.about')

        <div class="call-to-action has-text-centered">

            <h2 class="title">Ready to buy a template?</h2>

            <a href="/" class="button is-large is-black is-outlined">Browse all templates</a>

            <hr>

            <h2 class="title">Or still have a question?</h2>

            <a href="{{ route('pages.contact') }}" class="button is-large is-black is-outlined">Contact us</a>

        </div>

    </div>

@endsection

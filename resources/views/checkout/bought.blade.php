@extends('layouts.default')

@section('body')

    <div class="with-black-pattern header-buy has-text-centered">

        <h1 class="title has-space">Thanks for your purchase!</h1>
        <h2 class="subtitle is-small">Don't forget! It might take up to 2 business days for the template to be sento to
            your email</h2>

        <p class="has-text-white">Any problems just <a href="{{ route('pages.contact') }}">contact us</a> and we will
            solve it as fast as we can</p>

    </div>

    <div class="section with-white-pattern has-text-centered">

        <h2 class="title has-space">You just bought {{ $template->name }} | {{ $template->title }}</h2>

        <div class="columns">

            <div class="column is-offset-1 is-10">

                <figure class="image is-2by1 has-shadow">
                    <img src="{{ $template->cover }}" title="See demo of {{$template->name}}">
                </figure>

                <div id="paypal-button"></div>

            </div>

        </div>

        <div class="call-to-action has-text-centered">

            <h2 class="title">What about checking out other templates?</h2>

            <a href="/" class="button is-large is-black is-outlined">Browse all templates</a>

        </div>

    </div>

@endsection

@extends('layouts.default')

@section('body')

    <div class="columns with-black-pattern header-buy">

        <div class="column is-offset-1 is-8">
            <h1 class="title has-text-left">Thanks for buying!</h1>
            <h2 class="subtitle has-text-left is-small">{{ $template->title }}</h2>
            <a class="button is-light is-outlined pull-bottom" href="{{ $template->demo }}" target="_blank">Demo</a>
        </div>
        <div class="column is-2 has-text-right">
            <span class="tag is-white price pull-bottom is-text-right">${{ $template->price }}</span>
        </div>

    </div>

    <div class="section with-white-pattern">

        <div class="columns">

            <div class="column is-offset-1 is-10">

                <a href="{{ $template->demo }}" target="_blank">
                    <figure class="image is-4by3 has-shadow">
                        <img src="{{ '#' }}" title="See demo of {{$template->name}}">
                    </figure>
                </a>

                <div id="paypal-button"></div>

            </div>

        </div>

    </div>

@endsection

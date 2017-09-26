@extends('layouts.default')

@section('title')
    Buy {{ $template->name }} - {{ $template->title }}
@endsection

@section('body')

    <div class="columns with-black-pattern header-buy">

        <div class="column is-offset-1 is-8">
            <h1 class="title has-text-left">{{ $template->name }}</h1>
            <h2 class="subtitle has-text-left is-small">{{ $template->title }}</h2>
            <div class="columns">
                <div class="column is-1"><a class="button is-light is-outlined pull-bottom" href="{{ $template->demo }}"
                                            target="_blank">Demo</a></div>
                <div class="column is-1">
                    <div id="paypal-button-top"></div>
                </div>
            </div>
        </div>
        <div class="column is-2 has-text-right">
            <span class="tag is-white price pull-bottom is-text-right">${{ $template->price }}</span>
        </div>

    </div>

    <div class="section with-white-pattern">

        <div class="columns">

            <div class="column is-offset-1 is-10">

                <a href="{{ $template->demo }}" target="_blank">
                    <figure class="image is-2by1 has-shadow has-space">
                        <img src="{{ $template->cover }}" title="See demo of {{$template->name}}">
                    </figure>
                </a>

                <div class="call-to-action has-space">

                    <div class="columns">

                        <div class="column">
                            <h2 class="title">{{ $template->name }}</h2>
                            <h3 class="subtitle">{{ $template->title }}</h3>
                        </div>
                        <div class="column">
                            <h2 class="title has-text-right">${{ $template->price }}</h2>
                            <div class="has-text-right">
                                <div id="paypal-button-middle"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <h2 class="title has-text-centered">How does this works?</h2>

                @include('partials.about')

                <div class="call-to-action has-space">

                    <div class="columns">

                        <div class="column">
                            <h2 class="title">{{ $template->name }}</h2>
                            <h3 class="subtitle">{{ $template->title }}</h3>
                        </div>
                        <div class="column">
                            <h2 class="title has-text-right">${{ $template->price }}</h2>
                            <div class="has-text-right">
                                <div id="paypal-button-bottom"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script src="{{ asset('js/buy.js') }}"></script>

@endsection

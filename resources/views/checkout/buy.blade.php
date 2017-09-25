@extends('layouts.default')

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
                    <figure class="image is-4by3 has-shadow has-space">
                        <img src="{{ $template->thumbnail }}" title="See demo of {{$template->name}}">
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

                <div class="columns has-text-centered">

                    <div class="column">

                        <img src="{{ asset('img/brazil.png') }}">

                        <h3 class="subtitle has-text-weight-bold has-text-centered">From another country</h3>

                        <p class="has-text-centered">The templates are bought from <i>Brazil</i>, where nowadays 1
                            dollar is
                            worth 3 dollars. So basically here you have 3 times more money! That is why the templates
                            are so cheap.</p>

                    </div>

                    <div class="column">

                        <img src="{{ asset('img/payment.png') }}">

                        <h3 class="subtitle has-text-weight-bold has-text-centered">Secure payment</h3>

                        <p class="has-text-centered">All payments are handled through <i>Paypal</i>, so you can be sure
                            that your money will be safe during
                            the whole payment transaction.</p>

                    </div>

                    <div class="column">

                        <img src="{{ asset('img/delivery.png') }}">

                        <h3 class="subtitle has-text-weight-bold has-text-centered">Delivery</h3>

                        <p class="has-text-centered">All templates are sent through email to you. It can take up to
                            <strong>2 days</strong> for us to send the template. This delay is due to Paypal taking
                            about 1 day to proccess any payment and our vendor taking 1 day to provide the template you
                            asked for.
                        </p>

                    </div>

                </div>

                <div class="columns has-text-centered" style="margin-bottom: 2em">

                    <div class="column">

                        <img src="{{ asset('img/support.png') }}">

                        <h3 class="subtitle has-text-weight-bold has-text-centered">Support</h3>

                        <p class="has-text-centered">Unfortunately we cannot provide support due to the huge amount of
                            templates we are offering. For the time being we don't have any solution for you in case
                            you need support with something.</p>

                    </div>

                    <div class="column">

                        <img src="{{ asset('img/refund.png') }}">

                        <h3 class="subtitle has-text-weight-bold has-text-centered">Refund</h3>

                        <p class="has-text-centered">If the template you bought did not work properly we will give you a
                            refund if you warns us about the problem within 2 business days after the purchase.</p>

                    </div>

                    <div class="column">

                        <img src="{{ asset('img/license.png') }}">

                        <h3 class="subtitle has-text-weight-bold has-text-centered">License</h3>

                        <p class="has-text-centered">Our vendors provide the templates under the <i>GPL license</i>. Checkout our
                            <a href="{{ route('pages.terms') }}" target="_blank">terms and conditions page</a> for more information.</p>

                    </div>

                </div>

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

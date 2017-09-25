@extends('layouts.default')

@section('hero-body')

    <div class="hero-body with-black-pattern">
        <div class="container has-text-centered">
            <h1 class="title main-title">
                Request a template
            </h1>
            <h2 class="subtitle">
                Did not found a template? Just make a request and we will send a purchase link to your email
            </h2>
        </div>
    </div>

@endsection

@section('body')

    <div class="section">

        <div class="columns">

            <div class="column is-half is-offset-one-quarter form-request">

                <form action="{{ route('request.store') }}" class="has-space" method="POST">

                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" placeholder="Your email" name="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Template name or url</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="The template name or url" name="template" required>
                        </div>
                    </div>

                    <button class="button is-large is-fullwidth" type="submit">Request</button>

                </form>

                <div class="call-to-action has-text-centered">

                    <h2 class="title">What about browsing for other templates?</h2>

                    <a href="/" class="button is-large is-black is-outlined">Browse all templates</a>

                </div>

            </div>

        </div>

    </div>

@endsection

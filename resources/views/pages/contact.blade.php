@extends('layouts.default')

@section('hero-body')

    <div class="hero-body with-black-pattern">
        <div class="container has-text-centered">
            <h1 class="title main-title">
                Contact
            </h1>
            <h2 class="subtitle">
                Get in touch with us!
            </h2>
        </div>
    </div>

@endsection

@section('body')

    <div class="section">

        <div class="columns">

            <div class="column is-half is-offset-one-quarter form-request">

                <form action="{{ route('contact.store') }}" class="has-space" method="POST">

                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" placeholder="Your email" name="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Your message here" name="message" required></textarea>
                        </div>
                    </div>

                    <button class="button is-large is-fullwidth" type="submit">Send</button>

                </form>

                <div class="call-to-action has-text-centered">

                    <h2 class="title">Ready to buy some templates?</h2>

                    <a href="/" class="button is-large is-black is-outlined">Browse all templates</a>

                </div>

            </div>

        </div>

    </div>

@endsection

@extends('layouts.base')

@section('body')

    <nav class="navbar theme-details" role="navigation">

        <div class="navbar-brand">

            <a class="navbar-item is-hidden-desktop" href="{{ url('/') }}">
                <h2 class="logo-small">Bruyzil</h2>
            </a>

            <p class="navbar-item name is-hidden-mobile">{{ $template->name }}</p>

            <p class="navbar-item price is-hidden-mobile">
                <small>from ${{$template->price_dollar}} for only</small>
                <span>${{ $template->price }}</span>
                <a class="button is-warning" href="{{ route('checkout.show', $template->slug) }}">Bruy it</a>
            </p>

            <p class="navbar-item is-hidden-desktop">
                <a class="button is-warning bruyit-small" href="{{ route('checkout.show', $template->slug) }}">Bruy it for ${{ $template->price }}</a>
            </p>

        </div>

        <div class="navbar-menu">

            <div class="navbar-start">

                <p class="navbar-item">{{ $template->title }}</p>

            </div>

            <div class="navbar-end">

                <a class="navbar-item" href="{{ url('/') }}">
                    <h2 class="logo">Bruyzil</h2>
                </a>

            </div>

        </div>

    </nav>

    <iframe src="{{ $template->demo_url }}" frameborder="0" width="100%" height="100%"></iframe>

@endsection

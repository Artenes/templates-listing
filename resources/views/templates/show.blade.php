@extends('layouts.html')

@section('body')

    <nav class="navbar theme-details" role="navigation">

        <div class="navbar-brand">

            <a class="navbar-item is-hidden-desktop" href="{{ url('/') }}">
                <h2 class="logo-small">XipGate</h2>
            </a>

            <p class="navbar-item name is-hidden-mobile">{{ $template->name }}</p>

            <p class="navbar-item price is-hidden-mobile">
                <a class="button is-light is-outlined" href="{{ route('checkout.show', $template->slug) }}">Buy it for ${{ $template->price }}</a>
            </p>

            <p class="navbar-item is-hidden-desktop">
                <a class="button is-light is-outlined" href="{{ route('checkout.show', $template->slug) }}">Buy it for ${{ $template->price }}</a>
            </p>

        </div>

        <div class="navbar-menu">

            <div class="navbar-start">

                <p class="navbar-item template-title">{{ $template->title }}</p>

            </div>

            <div class="navbar-end">

                <a class="navbar-item" href="{{ url('/') }}">
                    <h2 class="logo">XipGate</h2>
                </a>

            </div>

        </div>

    </nav>

    <iframe src="{{ $template->demo_url }}" frameborder="0" width="100%" height="100%"></iframe>

@endsection

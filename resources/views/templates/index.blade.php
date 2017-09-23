@extends('layouts.grid')

@section('body')

    <div class="columns section">

        <div class="column is-8">
            <div class="title">Gallery</div>
        </div>

    </div>

    @foreach($templates->chunk(3) as $templateSet)

        <div class="columns">

            @foreach($templateSet as $template)

                <div class="column is-4">

                    <div class="card">

                        <header class="card-header">
                            <p class="card-header-title template-name"><a href="{{ route('templates.show', $template->slug) }}" target="_blank">{{ $template->name }}</a></p>
                        </header>

                        <div class="card-image">
                            <a href="{{ route('templates.show', $template->slug) }}" target="_blank">
                                <figure class="image is-4by3">
                                    <img src="{{ $template->thumbnail }}" alt="Image">
                                </figure>
                            </a>
                        </div>

                        <header class="card-header">
                                <p class="card-header-title template-title"><a href="{{ route('templates.show', $template->slug) }}" target="_blank">{{ $template->title }}</a></p>
                        </header>

                        <div class="other-store-price">
                            <p>from <span class="icon"><i class="fa fa-dollar"></i>{{ $template->price_dollar }}</span>
                                <a href="{{ $template->original_source_url }}" target="_blank">in other stores</a></p>
                        </div>

                        <div class="card-content">

                            <div class="has-text-centered our-price">

                                <p class="is-size-7">for just</p>
                                <p class="is-size-3"><span class="icon"><i class="fa fa-dollar"></i>{{ $template->price }}</span></p>

                            </div>

                        </div>

                        <footer class="card-footer">
                            <a href="{{ route('templates.show', $template->slug) }}" target="_blank" class="card-footer-item">demo</a>
                            <a href="{{ route('templates.show', $template->slug) }}" class="card-footer-item">bruy</a>
                        </footer>

                    </div>
                </div>

            @endforeach

        </div>

    @endforeach

@endsection

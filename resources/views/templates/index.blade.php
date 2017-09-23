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

                        <div class="card-image">
                            <a href="{{ route('templates.show', $template->slug) }}" target="_blank">
                                <figure class="image is-4by3">
                                    <img src="{{ $template->thumbnail }}" alt="Image">
                                </figure>
                            </a>
                        </div>

                        <header class="card-header">
                            <p class="card-header-title template-title">{{ $template->title }}</p>
                        </header>

                        <div class="other-store-price">
                            <p>from <span class="icon"><i class="fa fa-dollar"></i>{{ $template->price_dollar }}</span>
                                <a href="{{ $template->original_source_url }}" target="_blank">in other stores</a></p>
                        </div>

                        <div class="card-content">

                            <div class="has-text-centered our-price">

                                <p class="is-size-7">for just</p>
                                <span class="icon"><i class="fa fa-dollar"></i>{{ $template->price }}</span>

                            </div>

                        </div>

                        <footer class="card-footer">
                            <a href="#" class="card-footer-item">Save</a>
                            <a href="#" class="card-footer-item">Edit</a>
                            <a href="#" class="card-footer-item">Delete</a>
                        </footer>

                    </div>
                </div>

            @endforeach

        </div>

    @endforeach

@endsection

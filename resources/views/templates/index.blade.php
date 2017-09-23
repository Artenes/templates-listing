@extends('layouts.grid')

@section('body')

    <div class="columns section">

        <div class="column is-8">
            <div class="title">Gallery</div>
        </div>

    </div>

    <div class="field search-field">
        <p class="control has-icons-left has-icons-right">
            <input class="input is-normal" type="text" placeholder="search for themes">
            <span class="icon is-small is-left">
      <i class="fa fa-search"></i>
    </span>
        </p>
    </div>

    @foreach($templates->chunk(3) as $templateSet)

        <div class="columns">

            @foreach($templateSet as $template)

                <div class="column is-4">

                    <div class="card">

                        <header class="card-header">
                            <p class="card-header-title template-name"><a
                                        href="{{ route('demos.show', $template->slug) }}"
                                        target="_blank">{{ $template->name }}</a></p>
                        </header>

                        <div class="card-image">
                            <a href="{{ route('demos.show', $template->slug) }}" target="_blank">
                                <figure class="image is-4by3">
                                    <img src="{{ $template->thumbnail }}" alt="Image">
                                </figure>
                            </a>
                        </div>

                        <header class="card-header">
                            <p class="card-header-title template-title"><a
                                        href="{{ route('demos.show', $template->slug) }}"
                                        target="_blank">{{ $template->title }}</a></p>
                        </header>

                        <div class="other-store-price">
                            <p>from <span class="icon"><i class="fa fa-dollar"></i>{{ $template->price_dollar }}</span>
                                <a href="{{ $template->original_source_url }}" target="_blank">in other stores</a></p>
                        </div>

                        <div class="card-content">

                            <div class="has-text-centered our-price">

                                <p class="is-size-7">for just</p>
                                <p class="is-size-3"><span class="icon"><i
                                                class="fa fa-dollar"></i>{{ $template->price }}</span></p>

                            </div>

                        </div>

                        <footer class="card-footer">
                            <a href="{{ route('demos.show', $template->slug) }}" target="_blank"
                               class="card-footer-item footer-item footer-item-demo">demo</a>
                            <a href="{{ route('checkout.show', $template->slug) }}"
                               class="card-footer-item footer-item footer-item-bruy">bruy it</a>
                        </footer>

                    </div>
                </div>

            @endforeach

        </div>

    @endforeach

    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <a class="pagination-previous">Previous</a>
        <a class="pagination-next">Next page</a>
        <ul class="pagination-list">
            <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
            <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
            <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
        </ul>
    </nav>

@endsection

@php
    $navLinks = [
        [
            "name" => "characters",
            "url" => "characters",
        ],
        [
            "name" => "comics",
            "url" => "comics",
        ],
        [
            "name" => "movies",
            "url" => "movies",
        ],
        [
            "name" => "tv",
            "url" => "tv",
        ],
        [
            "name" => "games",
            "url" => "games",
        ],
        [
            "name" => "collectibles",
            "url" => "collectibles",
        ],
        [
            "name" => "videos",
            "url" => "videos",
        ],
        [
            "name" => "fans",
            "url" => "fans",
        ],
        [
            "name" => "news",
            "url" => "news",
        ],
        [
            "name" => "shop",
            "url" => "shop",
        ],
    ]
@endphp

<div class="bg-white pt-2 border">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-1">
                <figure>
                    <img width="70" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc-logo">
                </figure>
            </div>
            <div class="col-9">
                <ul class="list-unstyled d-flex justify-content-between">
                    @foreach ($navLinks as $link)
                    <li>
                        <a href="{{$link['url']}}" class="text-uppercase">
                            {{$link['name']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-text">
                        <i class="fas fa-magnifying-glass"></i>
                    </span>
                  </div>
            </div>
        </div>
    </div>
</div>
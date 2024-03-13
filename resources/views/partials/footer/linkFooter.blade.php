@php
    require_once __DIR__ . '/server_footer_links.php'    
@endphp

<div id="footer-bg">
    <div class="py-4">
        {{-- footer links --}}
        @foreach ($footerLinks as $col)
            <ul class="list-unstyled">
                <li>
                    <h3 class="text-uppercase">
                        {{$col['title']}}
                    </h3>
                </li>
                @foreach ($col['links'] as $link)
                    <li>
                        {{$link['link']}}
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
</div>
@php
$navs = config('navbar');
@endphp

<header>
    <div id="banner">
        <div class="container">
            <div class="banner">DC POWER VISA</div>
            <div class="banner">ADDITIONAL DC SITES</div>
        </div>
    </div>
    <div class="container">
        <div id="logo">
            <figure>
                <a href="#"><img src="{{asset('images/dc-logo.png')}}" /></a>
            </figure>
        </div>
        <nav>
            <ul>
                @foreach($navs as $nav)
                <li>
                    <a href="{{ $nav['url'] }}">{{ $nav['name'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
@php
$socials = config('footer')
@endphp

<footer>
    <div class="footer-top">
        <div class="container">
            <div id="links">
                <div id="group">
                    <div class="list">
                        <h3>DC COMICS</h3>
                        <ul>
                            @foreach($comics as $comic)
                            <li>{{$comic}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="list">
                        <h3>SHOP</h3>
                        <ul>
                            @foreach($shops as $shop)
                            <li>{{$shop}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="list">
                    <h3>DC</h3>
                    <ul>
                        @foreach($dcs as $dc)
                        <li>{{$dc}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="list">
                    <h3>SITES</h3>
                    <ul>
                        @foreach($sites as $site)
                        <li>{{$site}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="logo">
                <figure>
                    <img src="{{asset("../images/dc-logo-bg.png")}}" alt="Logo dc" />
                </figure>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div id="button">
                <button><a href="#">SIGN-UP NOW!</a></button>
            </div>
            <div id="social">
                <h4>FOLLOW US</h4>
                <ul>
                    @foreach($socials as $social)
                    <li>
                        <img src="{{asset("images/" . $social['url'])}}" alt="{{$social['name']}}">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
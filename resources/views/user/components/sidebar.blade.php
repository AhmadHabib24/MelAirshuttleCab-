<div id="popup-sidebox" class="popup-sidebox">
    <div class="sidebox-content">
        <div class="site-logo">
            <a href="{{route('home')}}"><img src="{{asset('img/logo-light.png')}}" alt="logo"></a>
        </div>
        <p>Everything your taxi business needs is already here! MelAirshuttleCab, a theme
            made for taxi service companies.</p>

        <ul class="sidebox-list">
            @foreach ($about as $item)
            <li class="call"><span>Call for ride:</span>{{ $item->phone }}</li>
            @endforeach
            <li>
                <span>You can find us at:</span>Level 5/55 Swanston St, Melbourne VIC 3000
            </li>
            <li><span>Email now:</span>info.MelAirshuttleCab@gmail.com</li>
        </ul>
    </div>
</div>
<!--/.popup-sidebox-->
<div id="sidebox-overlay"></div>
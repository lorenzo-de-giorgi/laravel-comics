<header class="container">
    <div id="dc-logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
    </div>
    <nav>
        <ul>
            @foreach ($navList as $navItem)
                <li><a href="{{$navItem['url']}}">{{$navItem['name']}}</a></li>
            @endforeach
        </ul>
    </nav>
</header>
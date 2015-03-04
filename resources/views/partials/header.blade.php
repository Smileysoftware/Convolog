<header>

    <strong>
        <a href="/">{!! Config::get('noted.site_title') !!}</strong></a>

    <nav>
        <ul>
            @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
            @else
            <li><a href="/conversations">Conversations</a></li>
            <li><a href="/auth/logout">Logout</a></li>
            @endif
        </ul>
    </nav>

</header>
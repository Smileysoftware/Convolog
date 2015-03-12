<header>

    <div class="row">

        <section class="small-12 medium-6 large-6 columns">

            <strong>
                <a href="/">{!! Config::get('convolog.site_title') !!}</a>
            </strong>

        </section>

        <section class="small-12 medium-6 large-6 columns">

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

        </section>

    </div>





</header>
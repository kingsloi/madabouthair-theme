<header class="masthead" role="banner">

    @if(Request::path() === '/')
        <h1>
    @else
        <a href="/" title="{{ \Canvas\Models\Settings::blogTitle() }}">
    @endif
    <img src="{{ asset('vendor/canvas/assets/images/mad-about-hair--md.png') }}" alt="{{ \Canvas\Models\Settings::blogTitle() }}" title="{{ \Canvas\Models\Settings::blogTitle() }}" class="logo"/>
    @if(Request::path() === '/')
        </h1>
    @else
        </a>
    @endif

        <div class="succulents">
            <div class="succulent succulent--1"></div>
            <div class="succulent succulent--2"></div>
            <div class="succulent succulent--3"></div>
            <div class="succulent succulent--4"></div>
            <div class="succulent succulent--5"></div>
        </div>

</header>

<nav class="navbar navbar-toggleable-sm sps--abv" role="navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        Menu <i class="fa fa-bars" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ isActiveURL('/') }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ isActiveMatch('blog') }}">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item {{ isActiveURL('/contact-maddie-raspe') }}">
                <a class="nav-link" href="/contact-maddie-raspe">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="GET" action="/search">
            <input class="form-control" name="q" type="text" placeholder="Search"
                value="{{ $query or '' }}"
            >
        </form>
    </div>
</nav>
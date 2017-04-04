<meta charset="utf-8">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Alice|Playfair+Display" rel="stylesheet">

        <!-- SEO Tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="{{ \Canvas\Models\Settings::blogSeo() }}">
        <meta name="author" content="{{ \Canvas\Models\Settings::blogAuthor() }}">
        <meta name="description" content="{{ \Canvas\Models\Settings::blogDescription() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('vendor/canvas/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('vendor/canvas/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('vendor/canvas/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('vendor/canvas/apple-touch-icon-152x152.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('vendor/canvas/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('vendor/canvas/favicon-16x16.png') }}" sizes="16x16" />
        <meta name="application-name" content="NWI-Based Hair Stylist Maddie Raspe"/>
        <meta name="msapplication-TileColor" content="#C58C71" />
        <meta name="msapplication-TileImage" content="{{ asset('vendor/canvas/mstile-144x144.png') }}" />

        <!-- Facebook Open Graph Tags -->
        <meta property="og:title" content="@yield('og-title')">
        <meta property="og:image" content="@yield('og-image')">
        <meta property="og:description" content="@yield('og-description')">
        <meta name="og:type" content="blog">
        <meta name="og:site_name" content="{{ \Canvas\Models\Settings::blogTitle() }}">

        <!-- Twitter Cards -->
        <meta name="twitter:title" content="@yield('twitter-title')">
        <meta name="twitter:description" content="@yield('twitter-description')">
        <meta name="twitter:image" content="@yield('twitter-image')">

        <script src="{{ elixir('vendor/canvas/assets/js/modernizr-custom.js') }}" charset="utf-8"></script>

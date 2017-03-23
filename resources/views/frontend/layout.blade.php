<!DOCTYPE html>
<html lang="en">
    <head>
        @include('canvas::frontend.shared.partials.meta')
        @include('canvas::frontend.shared.partials.css')
    </head>
    <body>
        @include('canvas::frontend.shared.partials.header')
        @yield('content')
        @yield('unique-js')
        @include('canvas::frontend.shared.partials.footer')

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
    </body>
</html>

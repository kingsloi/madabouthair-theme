@if (App::environment('production', 'staging'))
<!--
          __   _____                      _ _   _
         / /  / ____|                    | | | (_)
        / /  | |     ___  _ __  ___ _   _| | |_ _ _ __   __ _
       / /   | |    / _ \| '_ \/ __| | | | | __| | '_ \ / _` |
      / /    | |___| (_) | | | \__ \ |_| | | |_| | | | | (_| |_
     /_/      \_____\___/|_| |_|___/\__,_|_|\__|_|_| |_|\__, (_)
                                                         __/ |
                                                        |___/

      By: Forwardslash Consulting Limted (UK)
     URL: http://forwardslashconsulting.co.uk
     For: My Beautiful Wife, Madeline.
    Year: 2017
    Tech: Laravel, Canvas (blog), Canvas Paper (blog starter theme)
          SCSS, ES6, Gulp, Wallop, Bootstrap v4, Disqus, etc.

-->
@endif
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

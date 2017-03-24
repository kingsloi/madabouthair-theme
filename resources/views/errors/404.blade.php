@extends('canvas::errors.layout')

@section('title')
    <title>Canvas | Page not found</title>
@stop

@section('unique-css')
  <style>
  html {
    height: 100%;
  }
  body {
    min-height: 100%;
  }
  body{
    background-image: url({{ asset('vendor/canvas/assets/images/404.png') }});
    background-size: 125px 128.75px;
    background-repeat: no-repeat;
    background-position: bottom right;
  }

  @media (min-width: 576px) {
    body{
      background-size: 250px 257.5px;
    }
  }

  @media (min-width: 992px) {
    body{
      background-size: 500px 515px;
    }
  }

</style>
@stop

@section('content')

    <div class="login-container">
        <p class="f-20 f-300 text-center">404 - Page Not Found</p>
        <p class="text-muted text-center">Sorry, but nothing exists here.</p>
        @if(Auth::guard('canvas')->check())
            <div style="text-align: center">
                <a href="{!! route('canvas.admin') !!}" class="btn btn-link m-t-10">Back to Dashboard</a>
            </div>
        @else
            <div style="text-align: center">
                <a href="{!! route('canvas.blog.post.index') !!}" class="btn btn-link m-t-10">Back to Blog</a>
            </div>
        @endif
    </div>
@stop

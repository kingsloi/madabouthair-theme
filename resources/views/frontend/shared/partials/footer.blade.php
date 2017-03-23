<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="flower"></div>

    <div class="container-fluid">

        @if(!empty(\Canvas\Models\Settings::disqus()))
            @include('canvas::frontend.blog.partials.disqus')
        @endif

        <ul>
            <li class="built-on">built on <a href="https://canvas.toddaustin.io" target="_blank">canvas</a></li>
            <li class="sign-in"><a href="{!! route('canvas.admin') !!}"><i class="fa fa-lock"></i> Sign In</a></li>
            <li class="for-my-wife"><a href="https://kingsleyraspe.co.uk" target="_blank">100% British hubby-made <i class="fa fa-heart"></i></a></li>
        </ul>

    </div>
</footer>

<span id="scroll-to-top" class="sps">
    <a class="btn btn-primary" href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</span>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif
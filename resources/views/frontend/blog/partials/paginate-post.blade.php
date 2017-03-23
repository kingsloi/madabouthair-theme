<div class="pagination pagination--narrow">
    <ul class="pager">
        @if ($post->newerPost())
            <li class="previous">
                <a href="{!! $post->newerPost()->url() !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    Newer
                </a>
            </li>
        @endif
        @if ($post->olderPost())
            <li class="next">
                <a href="{!! $post->olderPost()->url() !!}">
                    Older
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    </ul>
</div>
@if (isset($tag->title))
    <div class="viewing">
        <h1 class="viewing__title">
            <i class="fa fa-fw fa-tag"></i> Tagged in <a href="#">{{ $tag->title or '' }}</a>
        </h1>
        <div class="viewing__subtitle">
            {{ $tag->subtitle }}
        </div>
    </div>
@endif
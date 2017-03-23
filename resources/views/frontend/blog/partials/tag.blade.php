@if (isset($tag->title))
    <div class="viewing-tag">
        <h1 class="viewing-tag__title">
            <i class="fa fa-fw fa-tag"></i> Tagged in <a href="#">{{ $tag->title or '' }}</a>
        </h1>
        <div class="viewing-tag__subtitle">
            {{ $tag->subtitle }}
        </div>
    </div>
@endif
@if(!isset($hideTopLevelDiv))
    <div class="c-gallery-list__item js-gallery__item">
@endif
        <div class="c-gallery-item">
            <a href="{{ $image['src'] }}" itemprop="contentUrl" data-size="{{ $image['width'] }}x{{ $image['height'] }}" class="c-gallery-item__inner js-gallery__link">
                <figure class="o-image">
                    <img class="o-image__media" src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" />
                </figure>
            </a>
        </div>
@if(!isset($hideTopLevelDiv))
    </div>
@endif
            <article class="post"
                itemscope itemtype="http://schema.org/BlogPosting"
                @if ($post->page_image)
                    style="background-image: url({{ $post->page_image }})";
                @endif
            >
                <div class="post__inner">
                    <h2><a href="{{ $post->url() }}">{{ $post->title }}</a></h2>

                    <div class="post__excerpt">
                        {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
                    </div>

                    <div class="post-meta">
                        <span class="post-meta__date">{{ $post->published_at->diffForHumans() }}</span>
                        <span class="post-meta__read-time">{{ (($latest->readingTime() > 1) ? $latest->readingTime() : '1' ) }} minute read</span>
                        @unless ($post->tags->isEmpty())
                            <span class="post-meta__tags">
                                {!! implode(' ', $post->tagLinks()) !!}
                            </span>
                        @endunless
                    </div>

                    <a href="{{ $post->url() }}" class="btn btn-primary">Read More</a>
                </div>

            </article>
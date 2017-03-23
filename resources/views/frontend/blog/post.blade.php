@extends('canvas::frontend.layout')

@section('og-title', $post->title)
@section('twitter-title', $post->title)
@section('og-description', $post->meta_description)
@section('twitter-description', $post->meta_description)
@section('title', \Canvas\Models\Settings::blogTitle().' | '.$post->title)
@if ($post->page_image)
    @section('og-image', url( $post->page_image ))
    @section('twitter-image', url( $post->page_image ))
@endif

@section('content')

    <article
        class="post-single"
        itemscope itemtype="http://schema.org/Article"

    >

        @if ($post->page_image)

            <div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
              <img src="{{ asset($post->page_image) }}" class="post-single__hero" itemprop="url" alt="{{ $post->title }}">
            </div>

        @endif

        <header class="viewing" itemprop="mainEntityOfPage">
            <h1 class="viewing__title" itemprop="headline">
                {{ $post->title }}
            </h1>
            <div class="post-meta">
                <span class="post-meta__date">{{ $post->published_at->diffForHumans() }}</span>
                <span class="post-meta__read-time">{{ $post->readingTime() }} minute read</span>
                @unless ($post->tags->isEmpty())
                    <span class="post-meta__tags">
                        {!! implode(' ', $post->tagLinks()) !!}
                    </span>
                @endunless

                <div itemprop="publisher" itemscope="itemscope" itemtype="https://schema.org/Organization" style="display: none;">
                    <meta itemprop="name" content="{{ config('app.name') }}"/>
                    <div itemprop="logo" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                        <meta itemprop="url" content="{{ asset('vendor/canvas/assets/images/mad-about-hair--md.png') }}"/>
                        <meta itemprop="width" content="500"/>
                        <meta itemprop="height" content="500"/>
                    </div>
                    <meta itemprop="name" content="{{ $post->title }}"/>
                </div>

                <meta itemprop="description" content="{{ $post->subtitle }}"/>
                <meta itemprop="author" content="{{ $post->user->display_name }}"/>
                <meta itemprop="datePublished" content="{{ $post->published_at->toIso8601String() }}"/>
                <meta itemprop="dateModified" content="{{ $post->updated_at->toIso8601String() }}"/>

            </div>
        </header>

        <div class="post-single__content" itemprop="articleBody">
            {!! $post->content_html !!}
        </div>

    </article>

    @include('canvas::frontend.blog.partials.paginate-post')

@stop
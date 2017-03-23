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
        itemscope itemtype="http://schema.org/BlogPosting"
    >

        @if ($post->page_image)
            <img src="{{ asset($post->page_image) }}" class="post-single__hero">
        @endif

        <header class="viewing">
            <h1 class="viewing__title" itemprop="name">
                {{ $post->title }}
            </h1>
            <meta itemprop="description" content="{{ $post->subtitle }}"/>
            <div class="post-meta">
                <span class="post-meta__date">{{ $post->published_at->diffForHumans() }}</span>
                <span class="post-meta__read-time">{{ $post->readingTime() }} minute read</span>
                @unless ($post->tags->isEmpty())
                    <span class="post-meta__tags">
                        {!! implode(' ', $post->tagLinks()) !!}
                    </span>
                @endunless
            </div>
        </header>

        <div class="post-single__content" itemprop="articleBody">
            {!! $post->content_html !!}
        </div>

        {{-- @include('canvas::frontend.blog.partials.author') --}}
    </article>

    @include('canvas::frontend.blog.partials.paginate-post')

@stop
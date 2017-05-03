@extends('canvas::frontend.layout')

@section('og-title', $post->title)
@section('twitter-title', $post->title)
@section('og-description', $post->meta_description)
@section('twitter-description', $post->meta_description)
@section('title', $post->title . ' | Blog | ' . \Canvas\Models\Settings::blogTitle())
@if ($post->page_image)
    @section('og-image', url( $post->page_image ))
    @section('twitter-image', url( $post->page_image ))
@endif

@section('content')

    <article class="post-single post-single--tutorial post-single-id--{{ $post->id }} post-single-slug--{{ $post->slug }}" itemscope itemtype="http://schema.org/Article">

        @include('canvas::frontend.blog.partials.post-header', $post)

        <div class="post-single__content c-gallery-list js-gallery" itemprop="articleBody">

            {!! $post->content_html !!}

        </div>

    </article>

    @include('canvas::frontend.blog.partials.paginate-post')

@stop
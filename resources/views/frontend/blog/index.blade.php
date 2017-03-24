@extends('canvas::frontend.layout')

@if (isset($tag->title))
    @section('title', $tag->title . ' | Blog | ' . \Canvas\Models\Settings::blogTitle())
@else
    @section('title', 'Blog | ' . \Canvas\Models\Settings::blogTitle())
@endif
@section('og-title', \Canvas\Models\Settings::blogTitle())
@section('twitter-title', \Canvas\Models\Settings::blogTitle())
@section('og-description', \Canvas\Models\Settings::blogDescription())
@section('twitter-description', \Canvas\Models\Settings::blogDescription())

@section('content')
    @include('canvas::frontend.blog.partials.tag')
    @include('canvas::frontend.blog.partials.posts')
    @include('canvas::frontend.blog.partials.paginate-index')
@stop

@section('unique-js')
@endsection
@extends('canvas::frontend.layout')

@if (isset($tag->title))
    @section('title', \Canvas\Models\Settings::blogTitle().' | '.$tag->title)
@else
    @section('title', \Canvas\Models\Settings::blogTitle().' | Blog')
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
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. Sandhika Galih in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>By. <a class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

  {!! $post->body !!}


  <a href="/blog">Back to Posts</a>
  <a href="/blog" class="d-block mt-3 text-decoration-none">Back to Posts</a>
@endsection
@extends('layouts.main-layout')
@section('content')
<h1>posts</h1>

<div>

  <h2>titolo</h2>
  <p>sottotitolo</p>
  <p>text</p>

  @foreach ($posts as $post)
    <h4>
    {{$post->title}}
    {{$post->sottotitolo}}
    {{$post->contenuto_post}}
  </h4>  
  @endforeach

</div>

@endsection
@extends('layouts.main-layout')
@section('content')
<h1>posts</h1>

<div>

      
    <a href="{{route('logout')}}">Logout</a><br>
    <a href="{{route('post.create')}}">CREA UN POST</a>
 

  @foreach ($posts as $post)
    <div>
      <h2>Titolo :  {{$post->Titolo}}</h2>
      <h4>Sottotitolo: {{$post->sottotitolo}}</h4> 
      <p>Text: {{$post->contenuto_post}}</p>
      <p>Category: </p>{{$post -> Category-> name}}
      <p>TAG:
        @foreach ($post -> tags as $tag)
            {{$tag -> name}} ,
        @endforeach
      </p>
      <a  href="{{route('post.edit', $post -> id)}}">EDIT </a><br>
      <a href="{{route('post.delete', $post -> id)}}">DELETE</a>
      <br><hr><br>
  </div>  
  @endforeach

</div>

@endsection
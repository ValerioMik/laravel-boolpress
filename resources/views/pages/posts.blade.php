@extends('layouts.main-layout')
@section('content')
<h1>posts</h1>

<div>

      
    <a href="{{route('logout')}}">Logout</a><br>
    <a href="{{route('post.create')}}">CREA UN POST</a>
 

  @foreach ($posts as $post)
    <div>
      <h2>titolo :  {{$post->Titolo}}</h2>
      <h4>sottotitolo: {{$post->sottotitolo}}</h4> 
      <p>text: {{$post->contenuto_post}}</p>
      <p>category: </p>{{$post -> Category-> name}}
      <br><hr><br>
  </div>  
  @endforeach

</div>

@endsection
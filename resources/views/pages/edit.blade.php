@extends('layouts.main-layout')
@section('content')

<h1>Modifica il post</h1>
<form action="{{route('post.update', $post-> id)}}" method="POST">

    @method('POST')
    @csrf
    <label for="Titolo">Titolo</label><br>
    <input type="text" name="Titolo" value="{{$post -> Titolo }}"><br>
    <label for="Sottotitolo">Sottotitolo</label><br>
    <input type="text" name="Sottotitolo"value="{{$post -> sottotitolo }}"><br>
    <label for="Text">Text</label><br>
   <textarea name="Text"  cols="30" rows="10">{{$post -> contenuto_post }}</textarea><br>
    <br>
    <br>
    <label for="category">Category</label>
    <select name="category" >
        @foreach ($categories as $category)
        <option value="{{$category -> id}}"
            @if ($category -> id == $post ->id)
                selected
            @endif
            >{{$category -> name}}</option>
            
        @endforeach
    </select>
    <H4>Tags</H4>
    @foreach ($tags as $tag)
        <input type="checkbox" name="tags[]" value="{{ $tag -> id }}"
        
            @foreach ($post -> tags as $postTag)

                @if ($tag -> id == $postTag -> id )
                    checked
                @endif
                
            @endforeach
        
        >{{$tag -> name}} <br>
    @endforeach

    <br><br>
    <input type="submit" value="UPDATE">


</form>

    
@endsection
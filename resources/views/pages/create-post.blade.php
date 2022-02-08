@extends('layouts.main-layout')
@section('content')


<form action="{{route('post.store')}}" method="POST">

    @method('POST')
    @csrf
    <label for="Titolo">Titolo</label>
    <input type="text" name="Titolo">
    <br>
    <br>
    <label for="category">Category</label>
    <select name="category" >
        @foreach ($categories as $category)
        <option value="{{$category -> id}}">{{$category -> name}}</option>
            
        @endforeach
    </select>
    <br><br>
    <input type="submit" value="CREAte">


</form>

    
@endsection
@extends('layouts.main-layout')
@section('content')


<form action="{{route('post.store')}}" method="POST">

    @method('POST')
    @csrf
    <label for="title">title</label>
    <input type="text" name="title">
    <br><br>
    <input type="submit" value="CREAte">


</form>

    
@endsection
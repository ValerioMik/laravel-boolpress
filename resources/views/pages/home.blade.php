@extends('layouts.main-layout')
@section('content')

    @auth
     ciao sono loggato!   
    @else
        
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">

            @method('POST')
            @csrf

            <label for="name">Name</label><br>
            <input type="text" name="name" ><br>
            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <label for="password_confirmation">Password confirmation</label><br>
            <input type="password"  name="password_confirmation"><br>
            <br>
            <input type="submit" value="REGISTER">

        </form>
        <hr>        

        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">

            @method('POST')
            @csrf

            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <br>
            <input type="submit" value="LOGIN">

        </form>
        <hr>
    @endauth

    
@endsection
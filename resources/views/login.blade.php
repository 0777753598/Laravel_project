
@extends('masterPage')

@section('header')
    <nav>
        <ul>
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
            <li><a href="about">About us</a></li>
            <li><a href="">Contact us</a></li>

        </ul>
    </nav>
@stop

@section('content')

    <div class="form_wrapper">
    <h2>Login from here</h2>
        <form action=userLogin method='post'>
            {{ csrf_field() }}
            <input type="email" name="username" placeholder="Enter Username" required="Username is required">
            <input type="password" name="password" placeholder="Enter Password" required="Password is required">
            <input type="submit" name="submit" value="Login">

            <input type="checkbox" name="remember" value="remember me">Remember me
            <a href="">forget passowd?</a>
        </form>


        {{ $error }}
    </div>

@stop

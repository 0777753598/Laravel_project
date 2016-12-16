@extends('masterPage')

@section('header')
	<nav>
		<ul>
			<li><a href="login">Login</a></li>
			<li><a href="">Register</a></li>
			<li><a href="about">About us</a></li>
			<li><a href="">Contact us</a></li>

		</ul>
	</nav>

@stop

@section('content')
<div class="form_wrapper">
<h2>Register from here</h2>
<form action="submit" method="post">
	{{ csrf_field() }}
	<input type="firstName" name="fname" placeholder="First Name" required>
	<input type="lastName" name="lname" placeholder="Last Name" required>
	<input type="username" name="uname" placeholder="Username" required>
	<input type="password" name="pwd" placeholder="Password" required>
	<input type="conferm" name="conferm" placeholder="Conferm Password" required>
	<input type="submit" name="submit" value="Submit">
</form>
</div>
@stop
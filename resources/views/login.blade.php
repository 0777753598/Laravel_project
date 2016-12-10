<!DOCTYPE html>
<html>
<head>
	<title>New Page</title>

	<style type="text/css">

		.wrapper {
			width: 960px;
			margin: 0 auto;
		}

		body	{
			margin: 0;
			background-color: rgba(220, 218, 216, 0.45);
		}

		header {
			background-color: #696b6a;
			overflow: hidden;
		}

		header nav {
			padding: 20px 0;
			float: right;
			/*overflow: hidden;*/

		}

		header nav ul	{
			text-decoration: none;
			list-style: none;
		}
		header nav ul li {
			display: inline-block;
			margin: 0 10px;
		}

		a {
			text-decoration: none;
			color: white;
			font-family: arial;
			padding:20px 0 ;
		}
		h2	{
			font-family: arial ;
			font-size: 20px;
		}

		.form {
			width: 500px;
			margin: 50px auto;
		}

		form	{
			padding: 20px;
			border: 1px solid;
			border-radius: 5px;	
			border-color:rgb(166, 204, 184) ;
			background-color: rgb(166, 204, 184);
			box-shadow: 0px 1px 10px -1px rgba(23, 23, 21, 0.38);

		}

		input {
			width: 	98%;
			height: 30px;
			border: none;
			border-radius: 3px;
			padding-left: 2%;  
			font-size: 	15px;
			margin-bottom: 10px;
			
			

		}
		input[type="submit"] {
			width: 100%;
			padding:0;
			margin-top: 10px;
			background-color:  rgba(96, 98, 113, 0.59);
		}

		input[type="checkbox"]{
			width: 10%;
			height: 15px;
			padding: 0;
		}

		form a {
			margin-left: 40%;
			color: red;
		}


	</style>

</head>
<body>

<header>
	<div class="wrapper">
		<nav>
			<ul>
				<li><a href="">Login</a></li>
				<li><a href="">Register</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Contact us</a></li>
				
			</ul>		
		</nav>
	</div>
</header>
<div class="wrapper">
    <div class="form">
    <h2>Login from here</h2>
        <form action="">
            <input type="text" name="username" placeholder="Enter Username" required="Username is required">
            <input type="password" name="password" placeholder="Enter Password" required="Password is required">
            <input type="submit" name="submit" value="Login">

            <input type="checkbox" name="remember" value="remember me">Remember me
            <a href="">forget passowd?</a>
        </form>
    </div>
</div>
</body>
</html>
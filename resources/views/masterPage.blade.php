<!DOCTYPE html>
<html>
<head>
	<title>New Page</title>

	<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>

<header>
	<div class="wrapper">

        @yield('header')

	</div>
</header>
<div class="wrapper">

		@yield('content')


</div>

<footer>
    <div class="footer">
        <div class="wrapper">
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="downlaod.html">DOWNLOAD</a></li>
                    <li><a href="contact.html">CONTACT</a></li>

                </ul>
            </nav>

            {{--<span>&copy darshana rulz <br> this is my production  <br> 077-7753598 <br> darshana.14@cse.mrt.ac.lk</span>--}}
        </div>
    </div>
</footer>

</body>

<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
	</head>
	<body>
		<header>
		    <a href='#' style='text-decoration:none;'>
			<img class="logo" src="{{ asset('img/hawkins.png') }}" alt="Logo" height="120" width="100" >
			<span class="title">Hawkins Police Department </span>
            <a href="{{ route('login') }}" class='button' id='login'>Login</a>
            <a href="{{ route('register') }}" class='button' id='register'>Register</a>
			<!-- <button class="button" id="register">Register</button>
			<button class="button" id="login">Login</button> -->
			<br><br>
			<span class="slogan">Dedication against crime.</span>
			</a>
		</header>
		<br><br><br><br>
		<ul class="navbar">
		<li class="nav"> <a href="public/dept.html" >Departments</a></li>
		<li class="nav"><a href="safety tips" > Safety Tips</a></li>
		<li class="nav"><a href="missing persons" > Missing Persons</a></li>
		<li class="nav"><a href="lodge a complaint" > Lodge a complaint</a></li>
		<li class="nav"><a href="contact us" > Contact us</a></li>
		<li class="search"><input type="text" placeholder="Search.."></li>
        </ul>
        <main>
            @yield('content')
        </main>
        <!-- <br>
		<br>
		<img class="sample_images" src="Hawkingspolicestation.png" alt="Hawkings police station" height="400">
		<h2>About Us</h2>
		<p>We shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, 
		and strive to create a fear free environment that is conducive to growth and development. We will remain
		committed to maintaining public order, preventing and detecting crime, maintaining and promoting communal
		harmony, ensuring a smooth flow of traffic, and taking strong action against terrorism, organized crime, 
		anti-social / illicit activities / elements.</p> -->
		<footer>
			<h4>Contact no: 022-22654451, 9956788473 &emsp;&emsp;&emsp;&emsp; Contact email-id: queries@hawkins.com</h4>
		</footer>
	</body>
</html>
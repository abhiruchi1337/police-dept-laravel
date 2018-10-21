<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/missing.css') }}">

	</head>
	<body>
		<header>
			<img class="logo" src="hawkins.png" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			<button class="button" id="register">Register</button>
			<button class="button" id="login">Login</button>
			<br><br>
			<span class="slogan">Dedication against crime.</span>
			
		</header>
		<br><br><br><BR>
		<ul class="navbar">
		<li class="nav"> <a href="{{url('departments')}}" >Departments</a></li>
		<li class="nav"><a href="{{url('safety')}}" > Safety Tips</a></li>
		<li class="nav"><a href="{{url('missing')}}" > Missing Persons</a></li>
		<li class="nav"><a href="{{ route('login') }}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
		</ul>
		<form class="search2">
			<input type="text" size="20" onkeyup="showResult(this.value)">
			<div id="livesearch"></div>
		</form>
		<h1 align="center">Contact Us</h1>
		<br>
		<table>
			<tr><td>Contact number</td>
			<td>022-25446347<br>022-25456747<br>9657884352</td></tr>
			<tr><td>Email id</td>
			<td>queries@hawkinspolice.com</td></tr>
			<tr><td>Address</td>
			<td>14, LBS road, Andheri, Mumbai.</td></tr>
		</table><br><br>
		<button id="lodgeacomplaint"><a href="{{route('login')}}"></a>Lodge a complaint?</button>
	</body>
</html>
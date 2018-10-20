@extends('layouts.mainapp')
	<head>
		<title>User_main</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/user_main.css')}}">
	</head>
<!-- 	
		<header>
			<img class="logo" src="hawkins.png" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			<br><br>
			<span class="slogan">Dedication against crime.</span>
			<div class="login_icon"><a href="#"><i class="fa fa-user-circle"></i></a> </div>
		</header>
		<br><br><br><BR>
		<ul class="navbar">
		<li class="nav"> <a href="departments" >Departments</a></li>
		<li class="nav"><a href="safety tips" > Safety Tips</a></li>
		<li class="nav"><a href="missing persons" > Missing Persons</a></li>
		<li class="nav"><a href="lodge a complaint" > Lodge a complaint</a></li>
		<li class="nav"><a href="contact us" > Contact us</a></li>
		<li class="search"><input type="text" placeholder="Search.."></li>
		</ul> -->
		@section('content')
		<h1 style="color: #ffd700;">Hello, {{Auth::user()->name}}!<h1>
		<h2>Welcome to Hawkins Police. Thank you for being a vigilant citizen. We appreciate your faith in us.</h2>
		<div class="buttons" align="center"><a href="{{route('newcomplaint')}}" id='login'>Lodge a complaint</a>
		<button>View my complaints</button></div>
		<h2>About Us</h2>
		<p>We shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, 
		and strive to create a fear free environment that is conducive to growth and development. We will remain
		committed to maintaining public order, preventing and detecting crime, maintaining and promoting communal
		harmony, ensuring a smooth flow of traffic, and taking strong action against terrorism, organized crime, 
		anti-social / illicit activities / elements.</p>
		@endsection
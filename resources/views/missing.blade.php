<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/missing.css') }}">

	</head>
	<body>
		<header>
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			@guest
			<!--<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			</li>
			<li class="nav-item">
					@if (Route::has('register'))
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
					@endif
			</li>-->
			<a href="{{ route('login') }}" class='button' id='login'>Login</a>
			<a href="{{ route('register') }}" class='button' id='register'>Register</a>
	@else
	<!-- <li class="nav-item dropdown" align='right'> -->
		<div  align='right'>
			{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> --}}
					{{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
			{{-- </a> --}}

			<div class='logoutbutton' aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
						 onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
					</form>
			</div>
			</div>
	<!-- </li> -->
	@endguest
			<br><br>
			<span class="slogan">Dedication against crime.</span>
			
		</header>
		<br><br><br><br>
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
		<h1 align="center">MISSING PERSONS</h1>
		<?php
		use App\Person;
		$missing=Person::where('p_type',4)->get();
		?>
		
		<div class="maincard">
		@if($missing!= null)
		@foreach($missing as $m)
		<div class="card">
		  <img src="{{asset('img/missing2.jpg')}}" alt="Person 2" height="150px" class="mp">
		  <div class="container">
			<h4><b>Name: {{$m->p_name}}</b></h4> 
			<!-- <h4><b>Age: 35</b></h4> -->
			<h4><b>Contact: {{$m->phone_number}}</b></h4>
		  </div>
		</div>
		@endforeach
		@endif
		<div class="card">
		  <img src="{{asset('img/missing1.jpg')}}" alt="Person 1" height="150px" class="mp" >
		  <div class="container">
			<h4><b>Name: Kenny Willis</b></h4> 
			<h4><b>Age: 30</b></h4>
			<h4><b>Contact: 9934055725</b></h4>
		  </div>
		</div>
		<!-- <div class="card">
		  <img src="{{asset('img/missing2.jpg')}}" alt="Person 2" height="150px" class="mp">
		  <div class="container">
			<h4><b>Name: Katherine Keta Jones</b></h4> 
			<h4><b>Age: 35</b></h4>
			<h4><b>Contact: 9964762025</b></h4>
		  </div>
		</div>
		<div class="card">
		  <img src="{{asset('img/missing3.jpg')}}" alt="Person 3" height="150px" class="mp">
		  <div class="container">
			<h4><b>Name: Daniel Adams</b></h4> 
			<h4><b>Age: 38</b></h4>
			<h4><b>Contact: 9885370725</b></h4>
		  </div>
		</div> -->
		</div><br><br>
	</body>
</html>
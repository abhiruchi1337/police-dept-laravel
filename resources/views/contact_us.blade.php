<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/contact_us.css') }}">

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
		<a id="lodgeacomplaint" href="{{route('login')}}" role="button">Lodge a complaint?</a>
	</body>
</html>
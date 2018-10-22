
	<head>
		<title>Police_main</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/sr_police_main.css')}}">
	</head>
	<body>
		<header>
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			<br><br>
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
			<span class="slogan">Dedication against crime.</span>
		</header>
		<br><br><br><br>
		<ul class="navbar">
		<li class="nav"> <a href="{{url('departments')}}" >Departments</a></li>
		<li class="nav"><a href="{{url('safety')}}" > Safety Tips</a></li>
		<li class="nav"><a href="{{url('missing')}}" > Missing Persons</a></li>
		<li class="nav"><a href="{{route('login')}}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
		<li class="search"><input type="text" placeholder="Search.."></li>
		</ul>
		<h1 id="police_dashboard">POLICE DASHBOARD</h1><hr>
		<br><br>
		<div class="policebutton"><a class="register" href='{{url("senior/newcase")}}'>Register a case</a></div>
		<div class="policebutton"><a class="register" href='{{url("senior/officers")}}'>View officers</a></div>
		<div class="policebutton"><a class="register" href='{{url("senior/newofficer")}}'>New officers</a></div>
		<br><br>
		<div class="pending_cases"><h2>Pending Cases</h2>
		
		<button class="accordion">View Pending Cases</button>
		<div class="panel">
			@if(isset($pending))
				@foreach($pending as $p)
				<h3>{{$p->i_id}}</h3>
		<label>Type: {{$p->i_type}}</label><p>Description:{{$p->i_desc}} </p><label>Area: {{$p->a_id}}</label><hr>
				@endforeach
			@endif
		<a class="all" href='{{url("/senior/cases")}}'>View all cases </a>
		</div>
		</div>

		<script>
		var acc = document.getElementsByClassName("accordion");
		var acc2 = document.getElementsByClassName("accordion2");
		var i;
		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}
		 var j=0;
		for (j = 0; j < acc2.length; j++) {
			acc2[j].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}
		</script>
	</body>

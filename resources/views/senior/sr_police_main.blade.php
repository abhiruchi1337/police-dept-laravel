
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
			<span class="slogan">Dedication against crime.</span>
			<div class="login_icon"><a class="icon" href="#"><i class="fa fa-user-circle"></i></a> </div>
		</header>
		<br><br><br><br>
		<ul class="navbar">
		<li class="nav"> <a href="departments" >Departments</a></li>
		<li class="nav"><a href="safety tips" > Safety Tips</a></li>
		<li class="nav"><a href="missing persons" > Missing Persons</a></li>
		<li class="nav"><a href="lodge a complaint" > Lodge a complaint</a></li>
		<li class="nav"><a href="contact us" > Contact us</a></li>
		<li class="search"><input type="text" placeholder="Search.."></li>
		</ul>
		<h1 id="police_dashboard">POLICE DASHBOARD</h1><hr>
		<br><br>
		<div class="policebutton"><a class="register" href='{{url("senior/newcase")}}'>Register a case</a></div>
		<div class="policebutton"><a href='{{url("senior/officers")}}'>View officers</a></div>
		<div class="policebutton"><a href='{{url("senior/newofficer")}}'>New officers</a></div>
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
		<a href='{{url("/senior/cases")}}'>View all cases </a>
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


<?php
use App\Person;
?>
	<head>
		<title>View_officers</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{url('css/view_officers.css')}}">
	</head>
	<body>
		<header>
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
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
		</ul>
		<h1 id="police_dashboard">POLICE DASHBOARD</h1><hr>
		<h2> VIEW OFFICERS</h2><br>
		<table class="table">
			<th>Officer id</th>
				<th>Name</th>
				<th>Department</th>
				<th>Rank</th>
				<th>Date of Birth</th>
			</th>
			
			@if(isset($officers))
			@foreach($officers as $o)
			<?php
			
			$operson=Person::where('p_id','=',$o->o_id)->first();
			?>
			<tr>
				<td class="case_id"><a href="{{route('singleOfficer',['oid' => $o->o_id])}}">{{$o->o_id}}</a></td>
				<td><input type='text' class="textbox" value="{{$operson->p_name}}"/></td>
				<td><input type='text' class="textbox" value="{{$o->d_id}}"/></td>
				<td><input type='text' class="textbox" value="{{$o->rank}}"/></td>
				<td><input type='text' class="textbox" value="{{$operson->dob}}"/></td>
			</tr>

			@endforeach
			@endif
<!-- 			
			<tr>
				<td class="case_id"><a href="#">6789</a></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
			</tr>
			<tr>
				<td class="case_id"><a href="#">1234</a></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
			</tr> -->
		</table>
	</body>

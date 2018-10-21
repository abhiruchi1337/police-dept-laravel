<?php
use App\OfficerIncident;
?>
<html>
	<head>
		<title>Jr_police_all_cases</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/jr_police_all_cases.css')}}">
	</head>
	<body>
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
		</ul>
		<h1 id="police_dashboard">POLICE DASHBOARD</h1><hr>
		<?php
		use App\Area;
		?>
		<h2>  ALL CASES</h2><br>
		<table class="table">
			<th>Case id</th>
				<th>Case type</th>
				<th>Status</th>
				<th>Date</th>
				<th>Area</th>
				<th>Assigned to</th>
			</th>

			@if(isset($cmp))
				@foreach($cmp as $c)
				<tr>
					<td class="case_id"><a href="{{route('singleComplaint',['cid' => $c->i_id])}}">{{$c->i_id}}</a></td>
					<td><input type='text' class="textbox" value='{{$c->i_type}}'/></td>
					<td><input type='text' class="textbox" value='{{$c->status}}'/></td>
					<td><input type='text' class="textbox" value='{{$c->i_date}}'/></td>
					<td><input type='text' class="textbox" value='{{Area::where("a_id","=",$c->a_id)->first()->a_name}}'/></td>
					<?php
					$assigned=OfficerIncident::select('o_id')->where('i_id','=',$c->i_id)->get();
					?>
					<td>
					@foreach($assigned as $a)
						{{$a['o_id']}}<br>
					@endforeach
					</td>
				</tr>

				@endforeach
			@endif
			<!-- <tr>
				<td class="case_id"><a href="#">9354</a></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
			</tr> -->
			
		</table>
	</body>
</html>
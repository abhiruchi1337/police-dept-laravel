<?php
use App\Area;?>
	<head>
		<title>User_my_complaints</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/user_my_complaints.css')}}">
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
		<h1 id="police_dashboard">USER DASHBOARD</h1><hr>
		<h2>MY COMPLAINTS</h2><br>
		<table class="table">
			<th>Case id</th>
				<th>Date</th>
				<th>Description</th>
				<th>Area</th>
				<th>Status</th>
			</th>
			@if(isset($cmp))
				@foreach($cmp as $c)
				<tr>
					<td class="case_id"><a href="{{route('singleComplaint',['cid' => $c->i_id])}}">{{$c->i_id}}</a></td>
					<td><input type='text' class="textbox" disabled="disabled" value='{{$c->i_date}}'/></td>
					<td><input type='text' class="textbox" disabled="disabled" value='{{$c->i_desc}}'/></td>
					<td><input type='text' class="textbox" disabled="disabled" value='{{Area::where("a_id","=",$c->a_id)->first()->a_name}}'/></td>
					<td><input type='text' class="textbox" disabled="disabled" value='{{$c->status}}'/></td>
				</tr>

				@endforeach
			@endif
			<!-- <tr>
				<td class="case_id"><a href="#">4567</a></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
				<td><input type='text' class="textbox"/></td>
			</tr>
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

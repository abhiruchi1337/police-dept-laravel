<?php
use App\OfficerIncident;
use App\HelperFunctions;
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
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			<br><br>
			<span class="slogan">Dedication against crime.</span>
			 <!-- <li class="nav-item dropdown" align='right'> -->
					{{-- <div  align='right'> --}}
							{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> --}}
								{{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
							{{-- </a> --}}

							<div align="right" class='logoutbutton' aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
							{{-- </div> --}}
						<!-- </li> -->
		</header>
		<br><br><br><BR>
		<ul class="navbar">
		<li class="nav"> <a href="{{url('departments')}}" >Departments</a></li>
		<li class="nav"><a href="{{url('safety')}}" > Safety Tips</a></li>
		<li class="nav"><a href="{{url('missing')}}" > Missing Persons</a></li>
		<li class="nav"><a href="{{route('login')}}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
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
					<td class="case_id"><a class="single" href="{{route('singleCase',['cid' => $c->i_id])}}">{{$c->i_id}}</a></td>
					<td><input type='text' class="textbox" value='{{HelperFunctions::getIncident($c->i_type)}}'/></td>
					<td><input type='text' class="textbox" value='{{$c->status}}'/></td>
					<td><input type='text' class="textbox" value='{{$c->i_date}}'/></td>
					<td><input type='text' class="textbox" value='{{Area::where("a_id","=",$c->a_id)->first()->a_name}}'/></td>
					
					<?php
					$assigned=OfficerIncident::select('o_id')->where('i_id','=',$c->i_id)->get();
					?>
					<td>
					@foreach($assigned as $a)
					{{HelperFunctions::getOfficer($a['o_id'])}}<br>
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
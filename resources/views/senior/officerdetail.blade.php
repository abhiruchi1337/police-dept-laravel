<!DOCTYPE html>
<html>
	<head>
		<title>Officer Details</title>
		<meta charset="utf-8">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="register.js"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('css/officer.css')}}">		
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
		<br><br><br><br>
		<ul class="navbar">
		<li class="nav"> <a href="{{url('departments')}}" >Departments</a></li>
		<li class="nav"><a href="{{url('safety')}}" > Safety Tips</a></li>
		<li class="nav"><a href="{{url('missing')}}" > Missing Persons</a></li>
		<li class="nav"><a href="{{route('login')}}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
		<li class="search"><input type="text" placeholder="Search.."></li>
		</ul>
        <h1 class="dash">POLICE DASHBOARD</h1>
		<div>
			<form id="officerform" name="officerdetail" method="post" action="{{route('updateOfficer',['oid' => $officer->o_id])}}">
			{!! method_field('patch') !!}
				<table id="formtable">
                    
                    
                    <!-- <br><br>-->
                  <!-- <br><br>-->
                  <tr>
					<td><label>Rank:</label></td>
					<td><input id="rank" type="text" name="rank1" value="{{$officer->rank}}"></td>
			  		</tr>
                  <!-- <br><br>-->
                  <tr>
					<td><label>Department:</label></td>
					<td><input id="dept" type="text" name="department" value="{{$officer->d_id}}"></td>
			  		</tr>
                  <!-- <br><br>-->
                  <tr>
					<td><label>Salary:</label></td>
					<td><input id="sal" type="text" name="Salary" value="{{$officer->salary}}"></td>
			  		</tr>
                  <!-- <br><br>-->
                </table>
            </form>
        </div>
    </body>
    <footer class="box"></footer>
</html>

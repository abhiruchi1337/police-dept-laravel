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
			<img class="logo" src="hawkins.png" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			<button class="button" id="register">Register</button>
			<button class="button" id="login">Login</button>
			<br><br>
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

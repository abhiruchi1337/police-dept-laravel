<!DOCTYPE html>
<html>
	<head>
		<title>Incident type</title>
		<meta charset="utf-8">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="register.js"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('css/incidenttyp.css')}}">		
	</head>
	<body>
		<header>
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
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
		<li class="nav"><a href="{{url('login')}}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact us')}}" > Contact us</a></li>
		<li class="search"><input id="search" type="text" placeholder="Search.."></li>
        </ul>
		<h1 class="dash">POLICE DASHBOARD</h1>
		<div>
			<form id="myform" name="incidenttype" method="post" action="{{route('updateOfficerCase',['cid' => $complaint->i_id])}}">
			{!! method_field('patch') !!}
				<table id="formtable">
					<tr><td><label>Case ID :{{$complaint->i_id}}</label></td></tr>
					<tr>
					  <td><label>Incident type:</label></td>
					   <td><input id="type" type="text" name="type" value="{{$complaint->i_type}}"></td>
					</tr>
                  <!-- <br><br>-->
					<tr>
                        <td><label>Date of incident :</label></td>
                         <td><input type="date" name="DOI" value="{{$complaint->i_date}}"></td>
                        </tr>
                    <!-- <br><br> -->
                    <tr>
				        <td><label>Description :</label></td>    
                        <td><textarea id="desc" rows="4" cols="40" name="description" placeholder="Enter description.."></textarea></td>
                    </tr>
                <!-- <br><br> -->
					<tr>
					<td><label>Area :</label></td>
					<?php
					use App\Area;
					$areas=Area::all();
					?>
					<td><select name="area">
                            @foreach($areas as $n)
                        <option value="{{$n->a_id}}">{{$n->a_name}}</option>
                        <!-- <option value="minor crime">minor crime</option>
                        <option value="feedback">feedback</option> -->
                        @endforeach
                        </select></td>
					</tr>
                <!--<br><br>-->
                <tr>
                <td><label>Status:</label></td>
                <td><select name="status">
					@if($complaint->status='ongoing')
						<option value="ongoing" selected>investigation</option>
						<option value="cold">cold</option>
						<option value="complete">Complete</option>
					@elseif($complaint->status='cold')
					<option value="ongoing">investigation</option>
					<option value="cold" selected>cold</option>
					<option value="complete">Complete</option>
					@elseif($complaint->status='complete')
					<option value="complete" selected readonly>Complete</option>
					@endif
                <!-- <option value="registered">Registered</option> -->
                </select>
                </td>
                </tr>
				<!--<br><br>-->
				<td><label>Victim name :</label></td>
                    <td><input id="name" type="text" name="vname" placeholder="Enter victim name.."></td>
                </tr>
                <!--<br><br>-->
                <tr>
                        <td><label>Address :</label></td>    
                        <td><textarea id="addr" rows="4" cols="40" name="address" placeholder="Enter address.."></textarea></td>
                </tr>
                <!-- <br><br> -->
                <tr>
                    <td><label>Aadhar number :</label></td>
                    <td><input id="aadhar" type="text" name="aadhar" placeholder="Enter aadhar no.."></td>
                </tr>
                <!--<br><br>-->
                <tr>
                    <td><label>Suspect name :</label></td>
                    <td><input id="suspect" type="text" name="suspectname" placeholder="Enter suspect name.."></td>
                </tr>
                    <tr>
					<td><label>Assigned to :</label></td>
					<td><input id="o_name" type="text" name="officer" placeholder="Enter officer.."></td>
					</tr>
				    <tr>
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
				        <td><input type="submit" value="submit" name="Update details"></td>
				    </tr>
				</table>
				
            </form>	
            </div>
        </body>			
			<footer class="box"></footer>
</html>

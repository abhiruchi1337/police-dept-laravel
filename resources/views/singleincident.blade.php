<!DOCTYPE html>
<html>
	<head>
		<title>Incident</title>
		<meta charset="utf-8">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="register.js"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('css/incidenttyp.css')}}">		
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
		<li class="nav"> <a href="departments" >Departments</a></li>
		<li class="nav"><a href="safety tips" > Safety Tips</a></li>
		<li class="nav"><a href="missing persons" > Missing Persons</a></li>
		<li class="nav"><a href="lodge a complaint" > Lodge a complaint</a></li>
		<li class="nav"><a href="contact us" > Contact us</a></li>
		<li class="search"><input id="search" type="text" placeholder="Search.."></li>
        </ul>
        <h1 class="dash">USER DASHBOARD</h1>
		<div>
			<form id="myform" name="incident" method="post">
				<table id="formtable">
                    <tr><td><label>Incident ID :</label></td>
                        <td><input id="id" type="text" name="inc" value="{{$complaint->i_id}}" readonly></td>
                    </tr>
                    <!-- <br><br>-->
					<tr>
					  <td><label>Incident type:</label></td>
					   <td><input id="type" type="text" name="incident" value="{{$complaint->i_type}}" readonly></td>
					</tr>
                  <!-- <br><br>-->
					<tr>
                        <td><label>Date of incident :</label></td>
                         <td><input type="date" name="DOI"value="{{$complaint->i_date}}" readonly></td>
                        </tr>
                    <!-- <br><br> -->
                    <tr>
				        <td><label>Description :</label></td>    
                        <td><textarea id="desc" rows="4" cols="40" name="description"  readonly>{{$complaint->i_desc}}</textarea></td>
                    </tr>
                <!-- <br><br> -->
                    <tr>
                    <td><label>Status:</label></td>
                    <td><input type="text" name="stat" value="{{$complaint->status}}" readonly></td>
                    </tr>
                    <!--<br><br>-->
					<tr>
					<td><label>Area :</label></td>
					<td><input id="area" type="text" name="area" value="{{$complaint->a_id}}" readonly></td>
					</tr>
                <!--<br><br>-->
				    <tr>
				        <td><input type="submit" value="submit" name="submit"></td>
				    </tr>
			    </table>
            </form>	
            </div>
        </body>			
			<footer class="box"></footer>
</html>
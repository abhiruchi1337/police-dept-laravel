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
						</div>
					<!-- </li> -->
											
		</header>
		<br><br><br><br>
		<ul class="navbar">
		<li class="nav"> <a href="{{url('departments')}}" >Departments</a></li>
		<li class="nav"><a href="{{url('safety')}}" > Safety Tips</a></li>
		<li class="nav"><a href="{{url('missing')}}" > Missing Persons</a></li>
		<li class="nav"><a href="{{route('login')}}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
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
				        <!-- <td><input type="submit" value="submit" name="submit"></td> -->
				    </tr>
			    </table>
            </form>	
            </div>
        </body>			
			<footer class="box"></footer>
</html>
<!DOCTYPE html>

	<head>
		<title>lodge complaint</title>
		<meta charset="utf-8">
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
        
		<li class="search"><input id="search" type="text" placeholder="Search.."></li>
        </ul>
		<div>
            <h1>LODGE A COMPLAINT </h1>
			<form id="myform" name="lodgecomplaint" method="post" action="{{ action('SeniorController@lodgecomplaint') }}">
				<table id="formtable">
                <tr>
                    <td><label>Area :</label></td>
                    <td><select name="area">
                            @foreach($areas as $n)
                        <option value="{{$n->a_id}}">{{$n->a_name}}</option>
                        <!-- <option value="minor crime">minor crime</option>
                        <option value="feedback">feedback</option> -->
                        @endforeach
                        </select></td>
                </tr>
                <!-- <br><br>-->
                <tr>
                        <td><label>Complaint type :</label></td>
                        <td><select name="type">
                            @foreach($ctype as $n)
                        <option value="{{$n->id}}">{{$n->name}}</option>
                        <!-- <option value="minor crime">minor crime</option>
                        <option value="feedback">feedback</option> -->
                        @endforeach
                        </select>
                        </td>
                        </tr>
                <!--<br><br>-->
                <tr>
                    <td><label>Date :</label></td>
                    <td><input type="date" name="DOI" placeholder="dd/mm/yyyy" ></td>
                </tr>
                <!-- <br><br> -->
                <tr>
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
                <!--<br><br>-->
                <tr>
                        <td><label>Other details :</label></td>    
                        <td><textarea id="other" rows="4" cols="40" name="details" placeholder="Enter other details.."></textarea></td>
                </tr>
                <!-- <br><br> -->
                <tr>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
				        <td><input type="submit" value="submit" name="submit"></td>
				</tr>
                </table>
            </form>
        </div>
        <footer class="box"></footer>
    </body>
</html>
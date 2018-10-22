<!DOCTYPE html>
<html>
	<head>
		<title>Create officer</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{asset('css/createoff.css')}}">		
	</head>
	<body>
		<header>
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			<br><br>
			<span class="slogan">Dedication against crime.</span>
			          <!-- <li class="nav-item dropdown" align='right'> -->
						 {{-- <div  align='right'>  --}}
							{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> --}}
								{{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
							{{-- </a> --}}

							<div class='logoutbutton' aria-labelledby="navbarDropdown">
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
	<h1 class="dash">POLICE DASHBOARD</h1>
	<hr>
        <h1 id="h1">CREATE OFFICER ACCOUNT</h1>
		<div>
			<form id="myform" name="registration" method="post" action="{{url('/senior/registerofficer')}}">
				<table id="formtable">
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<tr>
					  <td><label name="name">Name:</label></td>
					   <td><input id="name" type="text" name="name" placeholder="Enter name.."></td>
					</tr>
				<!-- <br><br>-->
					<tr>
					<td><label>Rank:</label></td>
					<td><input id="rank" type="text" name="rank" placeholder="Enter rank.."></td>
			  		</tr>
	  			<!-- <br><br>-->
					<tr>
					<td><label>Department :</label></td>
					<td><input id="dept" type="text" name="department" placeholder="Enter department.."></td>
					</tr>
                <!--<br><br>-->
                    <tr>
					<td><label>Salary :</label></td>
					<td><input id="salary" type="text" name="salary" placeholder="Enter salary.."></td>
					</tr>
				<!--<br><br>-->
					<tr>
					<td><label>Date of birth :</label></td>
					 <td><input type="date" name="DOB" placeholder="dd/mm/yyyy" ></td>
					</tr>
				<!-- <br><br> -->
					
				<!-- <br><br> -->
				    <tr>
				        <td><label>Address :</label></td>    
                        <td><textarea id="addr" rows="4" cols="40" name="addr" placeholder="Enter address.."></textarea></td>
					</tr>
					<tr>
						<td><label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label></td>
						<td><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required></td></tr>
                        {{-- <tr><div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
					</tr> --}}
                        {{-- <div class="form-group row"> --}}
                            <tr><td><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label></td>

                            {{-- <div class="col-md-6"> --}}
                                <td><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required></td></tr>

                                {{-- @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row"> --}}
                            <tr>
								<td><label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label></td>

                            {{-- <div class="col-md-6"> --}}
                                <td><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></td></tr>
                            {{-- </div>
                        </div> --}}

                <!-- <br><br> -->
				    <tr>
				        <td><input type="submit" value="submit" name="submit"></td>
				    </tr>
			    </table>
            </form>	
            </div>
        </body>			
			<footer class="box"></footer>
</html>

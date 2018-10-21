<!DOCTYPE html>
<html>
	<head>
		<title>Create officer</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{asset('css/createoff.css')}}">		
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
	<h1 class="dash">POLICE DASHBOARD</h1>
	<hr>
        <h1 id="h1">CREATE OFFICER ACCOUNT</h1>
		<div>
			<form id="myform" name="registration" method="post" action="{{url('/senior/registerofficer')}}">
				<table id="formtable">
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<tr>
					  <td><label name="name">Name:</label></td>
					   <td><input id="name" type="text" name="name" placeholder="Enter your name.."></td>
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
					<td><input id="salary" type="text" name="salary" placeholder="Enter department.."></td>
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
                        <td><textarea id="addr" rows="4" cols="40" name="addr" placeholder="Enter your address.."></textarea></td>
					</tr>
				
                        <div class="form-group row">
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

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

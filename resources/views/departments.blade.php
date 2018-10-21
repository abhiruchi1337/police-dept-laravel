<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/departments.css') }}">
	</head>
	<body>
		<header>
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
            @guest
            <!--<li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>-->
            <a href="{{ route('login') }}" class='button' id='login'>Login</a>
            <a href="{{ route('register') }}" class='button' id='register'>Register</a>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
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
        </ul>
        <form class="search2">
			<input type="text" size="20" onkeyup="showResult(this.value)">
			<div id="livesearch"></div>
		</form>
        <br>
        <h2>CRIME BRANCH</h2>
        <h3>Crime Branch in Crime Prevention, detection and investigation of cognizable or non cognizalble crimes.</h3>
        <p>DCP is the overall incharge of monitoring the investigation
            of serious crime and formulate new strategies for combating organized crime.
        </p>
        <br>
        <h2>RIOT CONTROL</h2>
        <h3>Counter sudden riotous situation and crowd control.</h3>
        <p>Riot Control Police ( RCP ) has been formed by a team of specially trained Police officers
            and men. This specialized force would be capable of handling and 
            dealing with a riotous situation in an expert way, which is an asset
            to the Mumbai Police.<br>
            RCP is consisting of young, tough and trained officers and men
            capable of working in adverse situations. They have been trained
            in mob dispersal tactics and provided with suitable equipments f
            or their operations. They have also been trained in First-Aid </p>
        <br>
        <h2>TRAFFIC CONTROL</h2>
        <h3>Manage traffic at common intersection and roads.</h3>
        <p>Due to industrial development in the state, there is tremendous pressure on transport services in the rural 
            and urban areas. Similarly, two-wheelers, four wheelers, etc. have been constantly running for fast moving.
            At the same time, the number of road accidents, increasing number of accidents, air pollution, etc. has also 
            increased. Works related to transport, road traffic, air pollution etc. have been increased greatly. In order to handle these works, the traffic control departments
            has been created to implement the rules made under the Motor Vehicles Act, 1988, tax laws, and passage tax laws etc.</p>
        <br>
        <h2>MISSING PERSONS BUREAU</h2>
        <h3>To trace all missing persons irrespective of location within the area.</h3>
        <p>The officers and staff attached to this branch helps the relatives of missing person 
           to trace him or her. Although endeavor of this branch to trace
           all missing persons, there is more emphasis laid on missing children and women.
           <br>
           The efforts to trace missing persons are mainly on the following lines:
           <br>1. Publish the description in a Police Notice and flash a wireless message.
           <br>2. Issue a circular carrying a photograph and description of the missing person to all Police Stations.
           <br>3. A photograph of the missing person is sent to Doordarshan to telecast it (A photograph of 10" x 12" size).
           <br>4. Field enquiries are made at Guest Houses, Hospitals, Railway Stations, Air-port, Bus stands, Cinema Houses, Parks, Gardens etc.
           <br><strong>This branch functions 24 hrs and members of the Public are free to seek the assistance of this branch to trace any Missing Person.</strong> 
        </p>
        <br>
        <h2>ECONOMIC OFFENCES WING</h2>
        <h3>Overall in-charge and supervising officer of the Economic Offences Wings which investigate complicated white collar crime.</h3>
        <p>White collar crime includes general, cheating, frauds in banking and medical fields, job racketing, shares and bogus stamp cases.
         Responsible for organizing various training programs and new strategies for enhancing the efficiency of the economic offence wing.
         It is also responsible for cases involving VAT evasion.
        </p>
        <br>
        <h2>ANTI NARCOTICS CELL</h2>
        <h3>Action against persoms who manufacture/sells/possess illegal substances.</h3>
        <p>This branch initiates action against persons who manufacture, transport, possesses,
           sale narcotics drugs, psychotropic substance like Heroin, Morphine, Ganja, Charas, Hashish oil, 
           Cocaine, Mephedrone, LSD, Ketamine, Amphetamine and others substances under NDPS Act 1985. 
        </p>
        <br>
            <footer class="box"></footer>
	</body>
</html>
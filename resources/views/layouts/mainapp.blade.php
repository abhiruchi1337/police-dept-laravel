<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
		
	</head>
	<body>
		<header>
		    <a href='#' style='text-decoration:none;'>
			<img class="logo" src="{{ asset('img/hawkins.png') }}" alt="Logo" height="120" width="100" >
			<span class="title">Hawkins Police Department </span>
				@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
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
            <!-- <a href="{{ route('login') }}" class='button' id='login'>Login</a>
            <a href="{{ route('register') }}" class='button' id='register'>Register</a> -->
			<!-- <button class="button" id="register">Register</button>
			<button class="button" id="login">Login</button> -->
			<br><br>
			<span class="slogan">Dedication against crime.</span>
			</a>
		</header>
		<br><br><br><br>
		<ul class="navbar">
		<li class="nav"> <a href="{{url('departments')}}" >Departments</a></li>
		<li class="nav"><a href="{{url('safety')}}" > Safety Tips</a></li>
		<li class="nav"><a href="{{url('missing')}}" > Missing Persons</a></li>
		<li class="nav"><a href="#" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
		<li class="search"><input type="text" placeholder="Search.."></li>
        </ul>
        <main>
            @yield('content')
        </main>
        <!-- <br>
		<br>
		<img class="sample_images" src="Hawkingspolicestation.png" alt="Hawkings police station" height="400">
		<h2>About Us</h2>
		<p>We shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, 
		and strive to create a fear free environment that is conducive to growth and development. We will remain
		committed to maintaining public order, preventing and detecting crime, maintaining and promoting communal
		harmony, ensuring a smooth flow of traffic, and taking strong action against terrorism, organized crime, 
		anti-social / illicit activities / elements.</p> -->
		<footer>
			<h4>Contact no: 022-22654451, 9956788473 &emsp;&emsp;&emsp;&emsp; Contact email-id: queries@hawkins.com</h4>
		</footer>
	</body>
</html>
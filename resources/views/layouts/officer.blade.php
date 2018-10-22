<!DOCTYPE html>
<html>
	<head>
		<title>Police_main</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/jr_police_main.css')}}">
	</head>
	<body>
		<header>
			<img class="logo" src="{{asset('img/hawkins.png')}}" alt="Logo" height="120" width="100">
			<span class="title">Hawkins Police Department </span>
			<br><br>
            <span class="slogan">Dedication against crime.</span>
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
                         <!-- <li class="nav-item dropdown" align='right'> -->
                            <div  align='right'>
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
                        @endguest
			<div class="login_icon"><a href="#"><i class="fa fa-user-circle"></i></a> </div>
		</header>
		<br><br><br><BR>
		<ul class="navbar">
		<li class="nav"> <a href="{{url('departments')}}" >Departments</a></li>
		<li class="nav"><a href="{{url('safety')}}" > Safety Tips</a></li>
		<li class="nav"><a href="{{url('missing')}}" > Missing Persons</a></li>
		<li class="nav"><a href="{{route('login')}}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
		<li class="search"><input type="text" placeholder="Search.."></li>
		</ul>
<main>
    @yield('content')
</main>
</body>
</html>

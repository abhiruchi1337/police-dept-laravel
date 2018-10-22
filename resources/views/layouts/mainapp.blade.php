<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
		<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
	</head>
	<body>
		<header>
		    <a href='#' style='text-decoration:none;'>
			<img class="logo" src="{{ asset('img/hawkins.png') }}" alt="Logo" height="120" width="100" >
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
		<li class="nav"><a href="{{ route('login') }}" > Lodge a complaint</a></li>
		<li class="nav"><a href="{{url('contact')}}" > Contact us</a></li>
        </ul>
		<form class="search2">
			<input type="text" size="20" onkeyup="showResult(this.value)" placeholder="Search..">
			<div id="livesearch"></div>
		</form>
		<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}

function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","/livesearch?q="+str,true);
  xmlhttp.send();
}
</script>
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
		
	</body>
</html>
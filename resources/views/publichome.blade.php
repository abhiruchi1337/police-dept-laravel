@extends('layouts.mainapp')
@section('content')
<br>
		<br>
		<div class="w3-content w3-section" style="max-width:500px">
		<img class="mySlides w3-animate-left" src="{{asset('img/hawkins2.jpeg')}}" height="400px" width="1330px">
		<img class="mySlides w3-animate-left" src="{{ asset('img/Hawkinspolicestation.png') }}" alt="Hawkings police station" height="400" width="1330px">
		  <img class="mySlides w3-animate-left" src="{{asset('img/hawkins3.jpeg')}}" height="400px" width="1330px">
		  <img class="mySlides w3-animate-left" src="{{asset('img/hawkins4.jpeg')}}" height="400px" width="1330px"> 
		</div>

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
</script>
		<h2>About Us</h2>
		<p>We shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, 
		and strive to create a fear free environment that is conducive to growth and development. We will remain
		committed to maintaining public order, preventing and detecting crime, maintaining and promoting communal
		harmony, ensuring a smooth flow of traffic, and taking strong action against terrorism, organized crime, 
		anti-social / illicit activities / elements.</p>
@endsection
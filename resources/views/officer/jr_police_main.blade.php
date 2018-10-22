@extends('layouts.officer')
@section('content')
		<h1 id="police_dashboard">POLICE DASHBOARD</h1><hr>
		<a class="button" id="register" href='{{url("officer/newcase")}}'>Register a case</a></div>
		<!-- <button class="view">View officers</button> -->
		<br>
		<br>
		<div class="pending_cases"><h2>Pending Cases</h2>
		
			<button class="accordion">View Pending Cases</button>
			<div class="panel">
				@if(isset($pending))
					@foreach($pending as $p)
					<h3>{{$p->i_id}}</h3>
			<label>Type: {{$p->i_type}}</label><p>Description:{{$p->i_desc}} </p><label>Area: {{$p->a_id}}</label><hr>
					@endforeach
				@endif
			<a href='{{url("/officer/cases")}}'>View all cases </a>
			</div>
		</div>
		</div>
		<script>
		var acc = document.getElementsByClassName("accordion");
		var acc2 = document.getElementsByClassName("accordion2");
		var i;
		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}
		 var j=0;
		for (j = 0; j < acc2.length; j++) {
			acc2[j].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}
		</script>
	@endsection
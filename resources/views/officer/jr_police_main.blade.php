@extends('layouts.officer')
@section('content')
		<h1 id="police_dashboard">POLICE DASHBOARD</h1><hr>
		<select id="cases">
			<option value="" disabled selected>Cases</option>
			<option value="your cases">Your cases</option>
			<option value="all cases">All cases</option>
		</select>
		<a class="register" href='{{url("officer/newcase")}}'>Register a case</a>
		<button class="view">View officers</button>
		<br>
		<div class="new_pending">
		<div class="new_cases"><h2>New Cases</h2>
			<button class="accordion">View New Cases</button>
			<div class="panel">
			<h3>Case 1</h3>
			<label>Type: abc</label><p>Description:wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwpppppppppppppppppppppppppppppppp </p><label>Area: </label><hr>
			<h3>Case 1</h3>
			<label>Type: abc</label><p>Description: </p><label>Area: </label><hr>
			<h3>Case 1</h3>
			<label>Type: abc</label><p>Description: </p><label>Area: </label><hr>
			</div>
		</div>
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
			<!-- <h3>Case 1</h3>
			<label>Type: abc</label><p>Description:wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww </p><label>Area: </label><hr>
			<h3>Case 1</h3>
			<label>Type: abc</label><p>Description: </p><label>Area: </label><hr>
			<h3>Case 1</h3>
			<label>Type: abc</label><p>Description: </p><label>Area: </label><hr> -->
			</div>
		</div>
		</div>

		<div class="recent_cases">
			<h2 style="text-align: center;">Recent Cases</h2><hr>
			<div class="temp">
				<h3>Case 1</h3>
				<label>Type: abc</label><br>
				<label>Area: xyz</label><hr>
				<h3>Case 2</h3>
				<label>Type: abc</label><br>
				<label>Area: xyz</label><hr>
				<h3>Case 3</h3>
				<label>Type: abc</label><br>
				<label>Area: xyz</label><hr>
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
@extends('layouts.app')

@section('content')
<style>
	.form-header {
		display: block;
		background-color: #4287f5;
		color: white;
		padding: 4% 10%;
	}

	.form-headline {
		font-family: 'Bebas Neue', cursive;
		font-size: 2.5rem;
		line-height: 2.5rem;
		display: block;
	}

	@media only screen and (max-width: 600px) {
		/* .content {
			padding: 4% 1%;
		} */
	}

	.content {
		padding: 4% 10%;
	}

	.input-field.col label {
		left: 0rem;
	}

	.mb {
		margin-bottom: 32px;
	}
</style>
<div id="form-card-background"></div>
<main>
	<div class="container" style="margin-top:100px; margin-bottom:100px;">
		<div class="card z-depth-4">
			<div class="form-header">
				<span class="form-headline">Admission Form</span>
				<span>This is the application form for class XI. Students from class X can apply here.</span>
			</div>
			<div>
				@include('layouts.alerts')
				<form action="{{ route('application_requests.store')}}" method="post" enctype="multipart/form-data">
					{!!Form::token()!!}
					<div class="content">
						<div class="input-field col s6 mb" style="margin-top:40px;">
							<i class="material-icons prefix">account_circle</i>
							<input id="fullname" name="full_name" type="text" class="validate">
							<label for="fullname">Full Name</label>
						</div>
						<div class="input-field col s6 mb">
							<i class="material-icons prefix">email</i>
							<input id="email" type="text" name="email" class="validate">
							<label for="email">Email</label>
						</div>
						<div class="input-field col s12 mb">
							<i class="material-icons prefix">face</i>
							<select name="gender">
								<option value="" selected disabled>Select your gender ..</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
							<label>Gender</label>
						</div>
						<div class="input-field col s12 mb">
							<i class="material-icons prefix">books</i>
							<select name="stream">
								<option value="" selected disabled>Select a stream</option>
								<option value="Arts">Arts</option>
								<option value="Commerce">Commerce</option>
								<option value="Science">Science</option>
							</select>
							<label>Course</label>
						</div>
						<div class="input-field col s6 mb">
							<i class="material-icons prefix">phone</i>
							<input id="phoneno" type="text" name="phone_number" class="validate">
							<label for="phoneno">Phone Number</label>
						</div>
						<div class="input-field col s6 mb">
							<i class="material-icons prefix">today</i>
							<input name="dob" type="text" placeholder="Click here to Pick a date or press enter in keyboard .." class="datepicker">
						</div>
						<div class="input-field col s6 mb">
							<i class="material-icons prefix">assignment_ind</i>
							<input id="fathersname" type="text" name="fathers_name" class="validate">
							<label for="fathersname">Father's Name</label>
						</div>
						<div class="input-field col s6 mb">
							<i class="material-icons prefix">assignment_ind</i>
							<input id="mothersname" type="text" name="mothers_name" class="validate">
							<label for="mothersname">Mother's Name</label>
						</div>
						<div class="input-field col s6 mb">
							<i class="material-icons prefix">room</i>
							<input id="lastschool" type="text" name="last_school" class="validate">
							<label for="lastschool">Last School Attended</label>
						</div>
						<div class="file-field input-field">
							<div class="waves-effect btn blue lighten-5" style="display:inline;">
								<span class="blue-text">Upload your profile photo</span>
								<input name="photo_url_upload" type="file">
							</div>
							<div class="file-path-wrapper">
								<input name="photo_url" class="file-path validate" type="text">
							</div>
						</div>
						<div class="file-field input-field">
							<div class="waves-effect btn blue lighten-5" style="display:inline;">
								<span class="blue-text">Upload your admit card</span>
								<input name="admit_card_upload" type="file">
							</div>
							<div class="file-path-wrapper">
								<input name="admit_card" class="file-path validate" type="text">
							</div>
						</div>
						<div class="file-field input-field">
							<div class="waves-effect btn blue lighten-5" style="display:inline;">
								<span class="blue-text">Upload your mark sheet</span>
								<input name="mark_sheet_upload" type="file">
							</div>
							<div class="file-path-wrapper">
								<input name="mark_sheet" class="file-path validate" type="text">
							</div>
						</div>
					</div>
					{{-- {{ method_field('PUT') }} --}}
					<button class="btn waves-effect waves-light" style="font-family: 'Bebas Neue', cursive; width:100%; height:56px; font-size:2rem; line-height:56px; background-color: #4287f5;" type="submit" name="submit">Submit
						{{-- <i class="material-icons right">done</i> --}}
					</button>
					
					{{-- <input class="blue btn white-text" type="submit" style="width:100%; height:56px; line-height:56px; text-align:center;" value="Apply"> --}}
				</form>
			</div>
		</div>
	</div>
</main>
<script>
	$(document).ready(function(){
    	$('.datepicker').datepicker();
		$('select').formSelect();
  	});
</script>
@endsection
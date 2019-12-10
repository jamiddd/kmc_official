@extends('layouts.app')

@section('content')
<main class="rules-main">
	<div class="main-container container">
		<div class="card">
			<div class="card-content valign-wrapper">
          		<span id="rulesHeader" class="color-x-text text-dark">COLLEGE RULES AND DISCIPLINES</span>
          		<div class="pink accent-3 chip" style="margin: 0px 15px;"><span class="white-text">Important</span></div>
        	</div>
	        <div class="card-action">
	          	<p class="rules-text">
	          		Students must abide by the College rules and regulations. Strict Discipline will be maintain inside the college and also in the societies. Any violations of Rules and Regualations by any students, irregular attendance, adoption of unfair means may lead to punishment like suspension and expansion from the college. All power for maintenance of discipline, rules and regulations are rested to the college authority. Student must come to the college with uniform prescribed by the college.
	          	</p>
	        </div>
		</div>
		<div class="card">
			<div class="card-content valign-wrapper">
          		<span class="process-header color-x-text text-dark">Admission Process</span>
          		{{-- <div class="color-x primary chip" style="margin: 0px 15px;"><span class="white-text">Important</span></div> --}}
        	</div>
	        <div class="card-action">
	        	<ol class="admission-process-ol">
	        		<li>Admission is purely on merit basis</li>
	        		<li>Copies of all certificates, mark sheets and other testinomials will have to be attached with four copies of passport size photgraph.</li>
	        		<li>The reservation for quota for admission will be maintained as per government rule.</li>
	        		<li>A few seats may be reserved for the meritorious and financially poor students.</li>
	        		<li>Transfer Certificate if necessary.</li>
	        		<li>Application form (with prospectus) for admission to the college may be collected from the office on payment of Rs. 200/- in cash or DD in favour of Kamrup Metropolitan College.</li>
	        	</ol>
	        </div>
		</div>
		<div class="card">
			<div class="card-content valign-wrapper">
          		<span class="process-header color-x-text text-dark">Uniform</span>
          		{{-- <div class="color-x primary chip" style="margin: 0px 15px;"><span class="white-text">Important</span></div> --}}
        	</div>
	        <div class="card-action">
	        	<ol class="admission-process-ol">
	        		<li>White Shirt with College logo</li>
	        		<li>Black trouser for both Boys and Girls.</li>
	        		<li>Tie (Black and Maroon)</li>
	        		<li>Belt (Black)</li>
	        		<li>Black Shoe and Gray Socks</li>
	        		<li>Dark Maroon/Black Blazer</li>
	        	</ol>
	        </div>
		</div>
	</div>
</main>
@endsection

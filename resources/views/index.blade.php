@extends('layouts.app')

<section class="container-fluid bg-FFFEC7">
	@section('content')
	  @include('partials.page-header')
	  <div class="bg-FFFEC7">
	  	
	  	<div class="text-center">
	  		<div class="empty-div height-12percent">
	  			
	  		</div>
	  		<h1 class="font-oswald color-5B5847">HOSPITALITY REDEFINED</h1>
	  		<div  class="container">
	  			<img src="http://ibinextemplate.com/app/uploads/2018/05/greenleaders-tripadvisor.jpg" class="float-right">
	  			<p>
	  				Stay with us and relax. Really relax. Make a cup of Keurig coffee or cocoa whenever you want. Grab some juice or a snack — we even stock the kitchen for you, at no extra cost. Grab a snack (you’ll find some in the cupboard) and play a DVD (you’ll find several next to the TV). Sit on the porch or patio and watch the kids play basketball in the court across the street. If you have young children, take them to the playground in the wooded park next to the basketball court. If you’re visiting friends or family, have them over. Check out area restaurants, stay home and cook, or arrange for catering. When you’re here, it’s your home! And the best part? You’ll have a whole, smoke-free apartment to yourselves, yet you’ll pay about what it would cost for just a room at most local B&Bs or quality hotels. We also offer affordable weekly and 30-day rates.
	  			</p>
		  		<button class="btn" style="background-color: #BC5646; color: white;">
			  		<span style="font-weight: bolder;">Book Your Stay</span>
			  	</button>
			  	<hr class="homepage-divider">
			  	<br>

			  	<div class="row text-center">
			  		<div class="col-md-4 bg-C7D1AF homepage-card max-width-30percent height-10percent">
			  			<br>
			  			<div class="height-1percent border-double"></div>
			  			<h4>LOCATION</h4>
			  		</div>
			  		<div class="col-md-4 bg-C7D1AF homepage-card max-width-30percent height-10percent">
			  			<br>
			  			<div class="height-1percent border-double"></div>
			  			<div style="background-color: white;display: inline-block;
			  			">
			  				
			  			<h4>READ OUR REVIEWS</h4>
			  			</div>
			  		</div>
			  		<div class="col-md-4 bg-C7D1AF homepage-card max-width-30percent height-10percent">
			  			<br>
			  			<div class="height-1percent border-double"></div>
			  			<h4>CONTACT</h4>
			  		</div>
			  	</div>

			  	<br>
	  		</div>

	  	</div>

	  </div>
	  <div class="">
	  	
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators carousel-indicators-custom">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block " src="http://ibinextemplate.com/app/uploads/2018/05/carousel_1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block " src="http://ibinextemplate.com/app/uploads/2018/05/carousel_2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block " src="http://ibinextemplate.com/app/uploads/2018/05/carousel_3.jpg" alt="Third slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block " src="http://ibinextemplate.com/app/uploads/2018/05/carousel_4.jpg" alt="Fourth slide">
		    </div>
			<div class="carousel-item">
		      <img class="d-block " src="http://ibinextemplate.com/app/uploads/2018/05/carousel_5.jpg" alt="Fifth slide">
		    </div>
			<div class="carousel-item">
		      <img class="d-block " src="http://ibinextemplate.com/app/uploads/2018/05/carousel_6.jpg" alt="Sixth slide">
		    </div>
			<div class="carousel-item">
		      <img class="d-block " src="http://ibinextemplate.com/app/uploads/2018/05/carousel_7.jpg" alt="Seventh slide">
		    </div>

		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	  </div>
	  



	<!--   @if (!have_posts())
	    <div class="alert alert-warning">
	      {{ __('Sorry, no results were found.', 'sage') }}
	    </div>
	    {!! get_search_form(false) !!}
	  @endif -->

	<!--   @while (have_posts()) @php the_post() @endphp
	    @include('partials.content-'.get_post_type())
	  @endwhile -->

	  {!! get_the_posts_navigation() !!}
	@endsection
</section>

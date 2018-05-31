{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-FFFEC7">
  	
    <!-- @include('partials.page-header') -->

    <div class="container padding-15px">
    	<div class="row bg-C7D1AF border-radius-13px width-80percent">
    		<div class="padding-15px">
		    	<h1 class="text-left">{!! App::title() !!}</h1>
		    	@include('partials.content-page')

        
          <!-- cant display iframe on server.
          so to display an embedded code, i have to check if the page being displayed is the location page.
          if it is, ill display he widget
           -->
          @if(is_page( 25 )) 
            <div class="mapouter"><div class="gmap_canvas"><iframe width="858" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=111-115 N.W. SEVENTH ST., RICHMOND, IN 47374 &t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:500px;width:858px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:858px;}</style></div>
          @endif

    		</div>
    	</div>
    </div>

  </div>
  @endwhile
@endsection

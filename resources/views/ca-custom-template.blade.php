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
    			
    		</div>
    	</div>
    </div>

  </div>
  @endwhile
@endsection

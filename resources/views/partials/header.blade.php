<header class="banner">
  <div class="bg-CC5D4C"></div>
  <div class="bg-black"></div>
  <div class="relative-top text-center">
  	<a href="#">
  		<img src="http://ibinextemplate.com/app/uploads/2018/05/fb-icon.png">
  	</a>
  	<a href="#">
  		<img src="http://ibinextemplate.com/app/uploads/2018/05/tripadvisor-icon.png">
  	</a>
  	<span class="span-inside-relative">
  		<img src="http://ibinextemplate.com/app/uploads/2018/05/map-marker-alt.png" height="16">
  		111-115 N.W. SEVENTH ST., RICHMOND, IN 47374 
  	</span>
  	<span class="span-inside-relative">
  		<img src="http://ibinextemplate.com/app/uploads/2018/05/map-marker-alt.png" height="16">
  		765-259-0967
  	</span>
  	<span class="span-inside-relative">
  		<img src="http://ibinextemplate.com/app/uploads/2018/05/map-marker-alt.png" height="16">
  		WESTSIDEGUESTHOUSE@GMAIL.COM
  	</span>

  </div>

  <div class="text-center">
  	<img src="">
    <a class="brand font-oswald color-5B5847" href="{{ home_url('/') }}">
	    <h1>
	    	{{ get_bloginfo('name', 'display') }}
	    </h1>
	</a>

	<!-- <div class="border-double"> -->
		<!-- <a class="border-ridge">
			Home
		</a>
		<a class="border-ridge">
			Rooms & Rates
		</a>
		<a class="border-ridge">
			Gallery
		</a>

		<a class="border-ridge">
			Blog
		</a>

		<a class="border-ridge">
			About
		</a>
		<a class="border-ridge">
			Contact Us
		</a> -->

		
	<!-- </div> -->
    <nav class="nav-primary border-double container">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-menu']) !!}
      @endif
    </nav>

    @if(is_front_page())
    	<div class="height-287px"></div>
    @endif

    @if(is_page( array( 'about', 140, 142 )))
    <div class="bg-black"></div>
    <div class="relative-top text-center"></div>
      @if (has_nav_menu('about_navigation'))
        {!! wp_nav_menu(['theme_location' => 'about_navigation', 'menu_class' => 'about-menu link-get-directions']) !!}
      @endif
    @endif

  </div>
  
</header>

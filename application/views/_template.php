<!doctype html>
<html class="no-js" lang="en">
  <head>
  	<title>{pagetitle}</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/foundation/css/foundation.css" />
	<link rel="stylesheet" href="assets/foundation/css/app.css">
	<!-- For Foundation footer icons, put this in your head -->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
	<script src="assets/foundation/js/vendor/modernizr.js"></script>
  </head>
  <body>

    <!-- begin nav -->
    <div class="contain-to-grid sticky"> 
	    <nav class="top-bar" data-topbar role="navigation"> 
	    	<ul class="title-area"> 
	    		<li class="name"> 
	    			<h1><a href="/">Bookie Wookie</a></h1> 
	    		</li> 
	    		<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone--> 
	    		<li class="toggle-topbar menu-icon">
	    			<a href="#"><span>Menu</span></a>
	    		</li> 
	    	</ul> 
	    	<section class="top-bar-section"> 
		    	<!-- Right Nav Section --> 
		    	<ul class="right"> 
		    		<li>
		    			<a href="#">Post an ad</a>
		    		</li> 
		    		<li>
		    			<a href="/ads">Browse ads</a>
		    		</li> 
		    		<li class="has-dropdown"> 

		    			<a href="#">About</a> 

		    			<ul class="dropdown"> 
		    				<li>
		    					<a href="/legal">Legal</a>
		    				</li> 
		    				<li>
		    					<a href="/faq">FAQ</a>
		    				</li> 
		    			</ul> 
		    		</li> 
		    	</ul> 
		    	<!-- Left Nav Section --> 
		    	<ul class="left">
		    	</ul> 
		    </section> 
	    </nav>   
    </div>
    <!-- end nav -->
  	
  	<!-- begin paralax -->              
	<div class="parallax-background">
	  <div class="intro-text">
	    Bookie wookie
	    <p><i class="fi-arrow-down"></i></p>
	  </div>
	</div>
	
	<div class="parallax-content">
	<!--begin body content -->
	  {content}
	<!-- end body content -->
    
    <!-- begin footer -->
	<footer class="footer">
	  <div class="row full-width">
	    <div class="small-12 medium-3 large-4 columns">
	      <i class="fi-laptop"></i>
	      <p>Buy, sell and trade books!</p>
	    </div>
	    <div class="small-12 medium-3 large-4 columns">
	      <i class="fi-html5"></i>
	      <p>An HTML 5 site build with Code Igniter for COMP 4711</p>
	    </div>
	    <div class="small-6 medium-3 large-2 columns">
	      <h4>Site Map</h4>
	      <ul class="footer-links">
	        <li><a href="#">Post an ad</a></li>
	        <li><a href="/ads">Browse ads</a></li>
	        <li><a href="/legal">Legal</a></li>
	        <li><a href="/faq">FAQ</a></li>
	      <ul>
	    </div>
	    <div class="small-6 medium-3 large-2 columns">
	      <h4>Follow Us</h4>
	      <ul class="footer-links">
	        <li><a href="#">Facebook</a></li>
	        <li><a href="#">Twitter</a></li>
	        <li><a href="#">Instagram</a></li>
	      <ul>
	    </div>
	  </div>
	</footer>              
    <!-- end footer-->

    </div>              
    <!-- end parallax -->

    <script src="assets/foundation/js/vendor/jquery.js"></script>
    <script src="assets/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

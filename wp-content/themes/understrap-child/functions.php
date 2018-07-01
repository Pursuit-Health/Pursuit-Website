<?php
/* constants */
define('IMAGE_PATH','/wp-content/themes/understrap-child/images/');

/* general site settings and clean up */
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);

function understrap_remove_scripts() {
    wp_dequeue_style('google-fonts-1');

    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	  wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_style( 'child-understrap-custom', get_stylesheet_directory_uri() . '/css/style.css', array(), $the_theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


// Add to head needed scripts
function child_theme_head_script() {
	?>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  <script>
  (function(d) {
	var config = {
		kitId: 'cvm5nhj',
		scriptTimeout: 3000,
		async: true
	},
	h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
  </script>
  <?php
}
add_action( 'wp_head', 'child_theme_head_script' );


function get_header1(){
	return '<nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/"><img src="'.IMAGE_PATH.'ph-logo.png" width="220" alt="Pursuit Health Tech Logo" class="img-fluid"></a>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" id="header-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/pricing">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/contact-us">Contact</a>
      </li>
      <li class="nav-item">
        <a href="https://itunes.apple.com/us/app/pursuit-health/id1293916105?mt=8" class="btn btn-sm btn-outline-light my-2 my-sm-0">Download</a>
      </li>
    </ul>
      
  </div>
</nav>';
}
add_shortcode( 'header', 'get_header1' );

function get_footer_1($atts){
  return '<div class="container pt-5 pb-5 text-white">
  <div class="row">
  <div class="col"><a href="/"><img src="'.IMAGE_PATH.'ph-logo.png" width="150" alt="Pursuit Health Tech Logo" class="img-fluid"></a>
  <br>
  <span class="small"><span class="small">&copy; 2018 All rights reserved.</span> Phoenix, AZ</span></div>
  <div class="col-4 col-md-3">
  <ul class="list-unstyled text-center">
  <li><a href="/" class="text-white small">Home</a></li>
  <li><a href="/about" class="text-white small">About</a></li>
  <li><a href="#" class="text-white small">FAQ</a></li>
  </ul>
  </div>
  <div class="col-4 col-md-3">
  <ul class="list-unstyled text-center">
  <li><a href="/contact-us" class="text-white small">Contact</a></li>
  <li><a href="/pricing" class="text-white small">Pricing</a></li>
  <li><a href="https://pursuittech.workable.com/" rel="noopener" target="_blank" class="text-white small">Careers</a></li>
  </ul>
  </div>
  <div class="mt-3 mt-md-0 col-md-3 text-center text-white">
  <p>Stay in Touch</p>
  <div class="row justify-content-center mb-2">
  <div class="col-5"><a href="https://www.facebook.com/PursuitHealth/" rel="noopener" target="_blank"><img src="'.get_stylesheet_directory_uri().'/images/facebook.svg" alt="follow us on facebook" class="float-right d-block mx-auto img-fluid" width="32" height="32"></a></div>
  <div class="col-5"><a href="https://www.instagram.com/pursuithealth.io/" rel="noopener" target="_blank"><img src="'.get_stylesheet_directory_uri().'/images/instagram.svg" alt="follow us on instagram" class="float-left d-block mx-auto img-fluid" width="32" height="32"></a></div>
  </div>
  <div class="small">
  <a href="mailto:contact@pursuithealthtech.com" class="text-white">contact@pursuithealthtech.com</a><br>
  <a href="tel:+1-602-759-0732" class="text-white">602-759-0732</a>
  </div>
  </div>
  </div>
  </div>';
}

add_shortcode('footer','get_footer_1');


function load_page_scripts(){
  if(is_page(150)){
    echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.css" rel="stylesheet">';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.js"></script>';
    echo "<script>jQuery('input[type=\"range\"]').rangeslider();</script>";
  }
}

add_action('wp_footer','load_page_scripts',100);
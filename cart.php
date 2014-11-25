<html>
<head>
<?php 
/*
Template Name: Shopping Cart
*/
wp_head();

 ?>
	<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1, initial-scale=1">
	<title>CART</title>
</head>
<div>
	<div id="mast"class="full downscroll">
		<div class="header-content center">
			
			<a href="<?php echo get_site_url(); ?>">
				<img src="<?php bloginfo('template_directory')?>/img/white-logo-big.png" alt="Gatku Polespears Logo" id="below-logo" class="left logo"/>
			</a>
			<div class="nav right">
				<ul class="clear">
					<li class="fb-button"><a href="http://www.facebook.com/gatku"><img src="<?php bloginfo('template_directory')?>/img/facebook200px.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory')?>/img/twitter200px.png"></a></li>
					<li><a class="store-link" href="<?php echo get_site_url(); ?>">Store</a></li>
					<li><a class="video-link" href="<?php echo get_site_url(); ?>">Videos</a></li>
					<li><a class="you-link" href="<?php echo get_site_url();?>">You</a></li>
					<li><a class="contact-link" href="<?php echo get_site_url(); ?>">Contact</a></li>
					<li><a href="<?php echo get_site_url(); ?>/shopping-cart/" class="link-bold">Cart</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="mobile-mast" class="header" >
		<div class="mobile-mast-container">
			<a id="mobile-menu-hit" href=""><img src="<?php echo get_template_directory_uri();?>/img/mobile-menu.png" class="mobile-menu-activate"></a>
			<p class="mobile-titles">CART</p>
		</div>
	</div>
	<nav id="mobile-menu">
		<ul>
			<li><a href="<?php echo get_site_url(); ?>">RETURN</a>
				
			</li>
			
			
		</ul>
	</nav>


	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="cart-container">
		<?php echo the_content(); ?>
	</section>

	<div class="cart-apparel-container">

		<div class="apparel">
		    <div class="thumbs">
		    	<a href="<?php echo get_site_url();?>/apparel"><img src="<?php echo get_template_directory_uri() ;?>/img/apparel/shirt2/shirt2-1.jpg"></a>
		        <a href="<?php echo get_site_url();?>/apparel"><img src="<?php echo get_template_directory_uri() ;?>/img/apparel/shirt1/shirt1-1.jpg"></a>		 
		        <a href="<?php echo get_site_url();?>/apparel"><img src="<?php echo get_template_directory_uri() ;?>/img/apparel/jacket1/jacket1-1.jpg"></a>
		    </div>

		    <div class="links">

		    	<a href="<?php echo get_site_url();?>/apparel"><strong>SUPERHERO</strong></a>
		        <a href="<?php echo get_site_url();?>/apparel"><strong>9'ER</strong></a>		       
		        <a href="<?php echo get_site_url();?>/apparel"><strong>COMFORT</strong></a>

		    </div>
		    <p class="store-label">CHECK OUT OUR APPAREL</p>
		</div>

	</div>

	<?php endwhile; else: ?>
	<section class="cart-container">
		there is nothing to show here.
	</section>
	

	<?php endif ;?>



	

</div>

<script>

	$(document).ready(function($){
		$('.eshoperror').parent().addClass('errorp');
		$('.errorp').insertAfter('#mast');

		if ( window.mozIndexedDB !== undefined ) {
   			$(".deletecartitem input").attr('src', '<?php echo get_template_directory_uri() . "/thex.png" ;?>').attr('placeholder', 'X');
		}
		//Mobile menu functionality (code from plugin called mmenu)
		 $(function() {
		    var $menu = $('#mobile-menu'),
		      $html = $('html, body');

		    //  Toggle menu 
		    $('#mobile-menu-hit').click(function( e ) {
		      e.stopImmediatePropagation();
		      e.preventDefault();
		      $menu.trigger( $menu.hasClass( 'mm-opened' ) ? 'close.mm' : 'open.mm' );          
		    });


		    $menu.mmenu();
		    $menu.find( 'li > a' ).on(
		      'click',
		      function() {
		        var href = $(this).attr( 'href' );

		        //  if the clicked link is linked to an anchor, scroll the page to that anchor 
		        if ( href.slice( 0, 1 ) == '#' ) {
		          $menu.one(
		            'closed.mm',
		            function() {
		              setTimeout(
		                function() {
		                  $html.animate({
		                    scrollTop: $( href ).offset().top
		                  }); 
		                }, 10
		              );  
		            }
		          );            
		        }
		      }
		    );
		  });
		$("#below-logo").show();

		if ($("#mast").css("display") === "none" ){
			$("#mobile-mast").css('background', 'rgba(255,255,255,0.95)');
		}

		$(".product-name:contains('SIX')").html(function(_, html) {
  			return  html.replace(/(SIX)/g, '<strong>SIX</strong>')
		});
		$(".product-name:contains('SEVEN')").html(function(_, html) {
  			return  html.replace(/(SEVEN)/g, '<strong>SEVEN</strong>')
		});
		$(".product-name:contains('EIGHT')").html(function(_, html) {
  			return  html.replace(/(EIGHT)/g, '<strong>EIGHT</strong>')
		});
		$(".product-name:contains('NINE')").html(function(_, html) {
  			return  html.replace(/(NINE)/g, '<strong>NINE</strong>')
		});
		$(".product-name:contains('TEN')").html(function(_, html) {
  			return  html.replace(/(TEN)/g, '<strong>TEN</strong>')
		});

	});	
</script>

</body>
</html>



















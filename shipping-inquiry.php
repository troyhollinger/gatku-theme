<?php 
/*
Template Name: International Shipping
*/

;?>
<?php $title = "QUOTE | Shipping" ?>
<?php $section = "shipping" ;?>
<?php include('header.php') ;?>


 <div id="mast"class="full downscroll">
	<div class="header-content center">
		
		<a href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo('template_directory')?>/img/white-logo-big.png" alt="Gatku Polespears Logo" id="below-logo" class="left logo"/>
		</a>
		<!-- <div class="nav right">
			<ul class="clear">
				<li class="fb-button"><a href="http://www.facebook.com/gatku"><img src="<?php bloginfo('template_directory')?>/img/facebook200px.png"></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory')?>/img/twitter200px.png"></a></li>
				<li><a class="store-link" href="<?php bloginfo('url');?>/#store">Store</a></li>
				<li><a class="video-link" href="<?php bloginfo('url');?>/#video-window">Videos</a></li>
				<li><a class="contact-link" href="<?php bloginfo('url');?>/#contact-window">Contact</a></li>
				<li><a href="<?php bloginfo('url');?>/shopping-cart/">Cart</a></li>
			</ul>
		</div> -->
	</div>
</div>
<div id="mobile-mast" class="header" style="background-color: rgba(255,255,255,0.9)">
	<div class="mobile-mast-container">
		<a id="mobile-menu-hit" href=""><img src="<?php echo get_template_directory_uri();?>/img/mobile-menu.png" class="mobile-menu-activate"></a>
		<p id="mobile-titles" class="mobile-titles">INT. SHIPPING</p>
	</div>
</div>
<nav id="mobile-menu">
	<ul>
		<li><a href="<?php bloginfo('url'); ?>">RETURN</a>
			
		</li>
		
		
	</ul>
</nav>


<?php if(have_posts()) : while(have_posts()) : the_post();?>
	<div class="shipping-container"><p class="shipping-title">International Shipping Rate Inquiry</p><?php echo the_content(); ?></div>
<?php endwhile; else: ?>
<p>there is nothing to show here.</p>

<?php endif ;?>
<?php wp_footer(); ?>
<script>
$(window).load(function() {
  //fades out loader div when page has loaded.
  $(".blinder").fadeOut(800);
});
$(document).ready(function(){
	$("#below-logo").show();
});
</script>
</body>
</html>
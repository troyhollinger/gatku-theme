<?php 
	
/*
Template Name: Apparel
*/	

$title = "GATKU Apparel";
$section = "apparel";
include('header.php');

;?>


<div id="mast" class="full downscroll">
	<div class="header-content center">

		<a href="<?php echo get_site_url() ?>">
			<img src="<?php bloginfo('template_directory');?>/img/white-logo-big.png" alt="GATKU Polespears Logo" id="below-logo" class="left logo">
		</a>
		<div class="nav right">
			<ul class="clear">
				<li class="fb-button"><a target="_blank" href="www.facebook.com/gatku"><img src="<?php bloginfo('template_directory')?>/img/facebook200px.png"></a></li>
				<li><a target="_blank" href="www.twitter.com/gatku"><img src="<?php bloginfo('template_directory')?>/img/twitter200px.png"></a></li>
				<li><a class="store-link" href="<?php echo get_site_url() ?>/#store">Store</a></li>
				<li><a class="video-link" href="<?php echo get_site_url() ?>/#video-window">Videos</a></li>
				<li><a class="you-link" href="<?php echo get_site_url() ?>/#you-window">You</a></li>
				<li><a class="contact-link" href="<?php echo get_site_url() ?>/#contact-window">Contact</a></li>
				<li><a href="<?php echo get_site_url() ?>/shopping-cart/">Cart</a><sup id="cart-items"></sup></li>
			</ul>
		</div>

	</div>
</div>

<!-- Mobile Mast -->
<div id="mobile-mast" class="header" style="background-color: rgba(255,255,255,0.9)">
	<div class="mobile-mast-container">
		<a id="mobile-menu-hit" href=""><img src="<?php echo get_template_directory_uri();?>/img/mobile-menu.png" class="mobile-menu-activate"></a>
		<p id="mobile-titles" class="mobile-titles">APPAREL</p>
	</div>
</div>
<nav id="mobile-menu">
	<ul>
		<li><a href="<?php echo get_site_url(); ?>">RETURN</a>
			
		</li>
		
		
	</ul>
</nav>

<div class="apparel-carousel">

		<?php $apparel_query = new WP_Query(['post_type' => 'apparel']); ?>

	       <?php  if ($apparel_query->have_posts()) : while ($apparel_query->have_posts()) : $apparel_query->the_post(); ?>

    	<div class="apparel-container">

			<div class="apparel-item" id="<?php echo the_field('tag_name');?>">
				
				<div class="apparel-image">
					<img class="image" src="<?php echo the_field('first_image'); ?>">
				</div>

				<div class="apparel-info">
					<h2 class="product-title"><?php echo the_field('product_name')?></h2>
					<p class="product-description"><?php echo the_field('product_description')?></p>

				</div>

				<div class="apparel-purchase">
					<div class="column-right">
					  <p class="price"><big>$<?php echo the_field('product_price');?></big>&nbsp;/Ships Free w/Pole Purchase</p>
					  <p class="caption">Choose Your Size</p>
					  <div class="addon-row left">
					    <?php echo the_content(); ?>
					  </div>
					</div>
				</div>

			</div>

		</div>

		<?php endwhile; else: ?>
	      	<p>There are no posts to show.</p>
	    <?php endif ?>

</div>

<p class="drag-prompt"> <- CLICK AND DRAG -></p>

<span id="span-1"></span>
<span id="span-2"></span>
<span id="span-3"></span>



<script> var thisPage = "apparel";</script>
<script>
	
	var templatePath = '<?php echo bloginfo("template_directory"); ?>';

</script>

<?php if ($section === "apparel") {
	echo '<script src="' . get_template_directory_uri() . '/jquery.js' . '"></script>';
	echo '<script src="' . get_template_directory_uri() . '/jquery.mmenu.min.js' . '"></script>';
	echo '<script src="' . get_template_directory_uri() . '/js/jquery.skippr.js' . '"></script>';
	echo '<script src="' . get_template_directory_uri() . '/js/apparel.js' . '"></script>';

} ?>

 <?php //include('footer.php') ;?>   
</body>
</html>
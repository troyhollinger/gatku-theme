<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ;?></title>
    <meta name="description" content="Producing the highest quality polespears, heads, and accessories. Locally built in San Diego, used and loved worldwide.">
    <meta property="og:title" content="GATKU Polespears" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.gatku.com/" />
    <meta property="og:image" content="<?php echo get_template_directory_uri();?>/img/fbscreenshot-coronados.png" />
    <meta property="og:description" content="Producing the highest quality polespears, heads, and accessories. Locally built in San Diego, used and loved worldwide." />
    <meta property="og:site_name" content="GATKU" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-152x152.png" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon" />
    
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/mstile-144x144.png" />
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <?php wp_enqueue_script('jquery'); ?>


   
    
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1">

     <script>
	//   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	//   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	//   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	//   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	//   ga('create', 'UA-46130866-1', 'gatku.com');
	//   ga('send', 'pageview');

	 </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46881632-1', 'gatku.com');
  ga('send', 'pageview');
  </script>
  
  <script type="text/javascript">
  var fb_param = {};
  fb_param.pixel_id = '6014043805789';
  fb_param.value = '0.00';
  fb_param.currency = 'USD';
  (function(){
    var fpw = document.createElement('script');
    fpw.async = true;
    fpw.src = '//connect.facebook.net/en_US/fp.js';
    var ref = document.getElementsByTagName('script')[0];
    ref.parentNode.insertBefore(fpw, ref);
  })();
  </script>
  
  <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6014043805789&amp;value=0&amp;currency=USD" /></noscript>
  <script type="text/javascript">
    var directory = "<?php echo get_template_directory_uri();?>";
  </script>
  </head>
  
  <body <?php  echo $section == "media" ? 'ng-app="media" ng-controller="MediaController"' : '' ;?>>
  	<?php if($section !== "shipping") { ?>
  	<!-- <div id="blinder"><img src="<?php echo get_template_directory_uri();?>/img/spiffygif_68x68.gif"><p id="waiting-message">It's worth the wait.</p></div> -->
  	<?php }; ?>












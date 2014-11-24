<?php 
/*
	Template Name: Checkout
*/
;?>
<html>
  <head>
    <?php wp_head(); ?>
    <style>
    .cart,.hr,#mainlegend, .privacy, .fld6 legend, .fld6 ul {
      display:none;
    }
    @-moz-document url-prefix() {
      .editcart {
        bottom:13px;
      }
    }
    </style>
     <meta name="viewport" content="width=device-width, user-scalable=no">
     <title>CHECKOUT</title>
  </head>
  <body>
  <div>  
    <div id="mast"class="full downscroll">
    	<div class="header-content center">
    		<a href="<?php bloginfo('url'); ?>">
    			<img src="<?php bloginfo('template_directory')?>/img/white-logo-big.png" alt="Gatku Polespears Logo" id="below-logo" class="left logo"/>
    		</a>
    		<div class="nav right">
    			<ul class="clear">
    				<li class="fb-button"><a href="http://www.facebook.com/gatku"><img src="<?php bloginfo('template_directory')?>/img/facebook200px.png"></a></li>
    				<li><a href="#"><img src="<?php bloginfo('template_directory')?>/img/twitter200px.png"></a></li>
    				<li><a class="store-link" href="<?php bloginfo('url');?>/#store">Store</a></li>
    				<li><a class="video-link" href="<?php bloginfo('url');?>/#video-window">Videos</a></li>
    				<li><a class="contact-link" href="<?php bloginfo('url');?>/#contact-window">Contact</a></li>
    				<li><a href="<?php bloginfo('url');?>/shopping-cart/">Cart</a></li>
    			</ul>
    		</div>
    	</div>
    </div>
    <div id="mobile-mast" class="header">
      <div class="mobile-mast-container">
        <a id="mobile-menu-hit" href=""><img src="<?php echo get_template_directory_uri();?>/img/mobile-menu.png" class="mobile-menu-activate"></a>
        <p class="mobile-titles">CHECKOUT</p>
      </div>
    </div>
    <nav id="mobile-menu">
      <ul>
        <li><a href="<?php bloginfo('url'); ?>/shopping-cart/">RETURN</a>
          
        </li>
        
        
      </ul>
    </nav>
    <div class="checkout-exists"></div>
    <section class="cart-container">
      <p class="checkout-title">Billing &amp; Shipping Info<span>Overview ></span></p>
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    		<?php echo the_content(); ?>

    	<?php endwhile; else: ?>
    	there is nothing to show here.

    	<?php endif ;?>
       <p class="checkout-note"><strong>Note to International Orders -</strong><br>
        When shipping outside the USA rates vary. We have found it best to apply rates order specific. Go ahead and place your order now and we will PayPal request the difference in shipping paid on order placed with the actual shipping cost. Thank you.
      </p>
    </section>
  </div>
  <?php //wp_footer(); ?>
    <script>
      //enables toggle function
      jQuery(document).ready(function($){
        $.fn.clicktoggle = function(a, b) {
          return this.each(function() {
              var clicked = false;
              $(this).click(function() {
                  if (clicked) {
                      clicked = false;
                      return b.apply(this, arguments);
                  }
                  clicked = true;
                  return a.apply(this, arguments);
              });
          });
        };
        var target = $(".fld4 span"),
            $legend = $(".fld4 legend");
        target.hide();
        $legend.html('Shipping Address - (if different)');
        $legend.clicktoggle(function(){
            target.fadeIn('fast');
            $(this).html('Click to hide').css('margin-bottom' , '10px');
          }, function(){
            target.fadeOut('fast');
            $(this).html('Shipping Address - (if different)')
        });

        // Fixes "Mailing" Title to say "Billing".
        $('.fld2 legend').html('Billing Address').css({marginBottom : '20px', fontSize: '1rem'});

        var formDefaulter=function(){
          //Class to hold each form element
          var FormElement=function(element){
              var that=this;
              this.element=element;

              var initialVal=this.element.val();
              var isEdited=false;

              this.element.focus(function(){clearBox()});
              this.element.blur(function(){fillBox()});

              var clearBox=function(){
                  if(!isEdited){
                      that.element.val("");
                      isEdited=true;
                  }
              }
              var fillBox=function(){
                  if(that.element.val()==""){
                      that.element.val(initialVal);
                      isEdited=false;
                  }
              }
          }

          var add=function(elementId){
              new FormElement($('#'+elementId));
          }

          return{
              add:add
          }
        }();

        $(function(){
        formDefaulter.add('first_name');
        formDefaulter.add('last_name');
        formDefaulter.add('company');
        formDefaulter.add('email');
        formDefaulter.add('phone');
        formDefaulter.add('address1');
        formDefaulter.add('address2');
        formDefaulter.add('city');
        });

        $('.buttonwrap').append($('.eshopcp1'));

        $.fn.exists = function(callback) {
          var args = [].slice.call(arguments, 1);

          if (this.length) {
            callback.call(this, args);
          };

          return this;
        };

        $('.eshopcheckoutconf').exists(function(){
          $('.checkout-note').hide();
          $('.cart').show().css('width', '65%').css('float', 'right');
          $('.cartItem').css('height', '180px');
          $('.amts').css('width', '200px');
          $('.checkout-title span').hide();
          $('.checkout-title').html('Please confirm your details.').css('margin-bottom', '25px');
          $('.eshopcheckoutconf > h3').hide();
          $('caption').addClass('final-cart-title').css('top', '0').css('right', '0');
          $('.horizontal').css('width', '45%');
          $('.finalize').prependTo($('.eshopcp3'));
          $('.eshopcp3').appendTo($(".eshop-confirm")).css('position', 'relative');
          $(".editcheckout").css('height', '110px');
          $(".editcheckout a").css('position', 'absolute').css('bottom', '20px');

        });
        $('#process').exists(function(){
          $(".checkout-title, .checkout-note").hide();
          $("#ppsubmit").css('width', '600px').css('font-size', '4rem');
          $('.editcheckout').css('margin-left', '0').css('margin-top', '5px');
        });
        if ($("#mast").css("display") === "none" ){
          $('.cart').css('width', '100%').css('float', 'none');
          $(".editcheckout a").css('position', 'static').css('bottom', '0px');
          $(".editcheckout").css('height', '20px');
          $("#mobile-mast").css('background', 'rgba(255,255,255,0.95)');


        } 
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

      });
    </script>
  </body>
</html>
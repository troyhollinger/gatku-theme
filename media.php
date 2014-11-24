<?php 

/*
Template Name: Media
*/


	$title = "Gatku Media";
	$section = "media";

	include('header.php');


    /**
     * Create media asset grid from template
     *
     * @param associated array of uri values pointing to images.
     */
    function GridGenerator($array) {

        $build = '<div class="asset-arrangement-row top-row">
            <a href="' . get_template_directory_uri() . '/' . $array['1'] . '" download><div class="media-square media-square-large" style="background-image:url(' . get_template_directory_uri() . '/' . $array['1'] . ')"></div></a>
            <a href="' . get_template_directory_uri() . '/' . $array['Th'] . '" download><div class="media-square media-square-thumb" style="background-image:url(' . get_template_directory_uri() . '/' . $array['Th'] . ')"></div></a>
            <a href="' . get_template_directory_uri() . '/' . $array['Thr'] . '" download><div class="media-rectangle media-rectangle-thumb" style="background-image:url(' . get_template_directory_uri() . '/' . $array['Thr'] . ')"></div></a>
            <a href="' . get_template_directory_uri() . '/' . $array['1r'] . '" download><div class="media-rectangle media-rectangle-large" style="background-image:url(' . get_template_directory_uri() . '/' . $array['1r'] . ')"></div></a>
        </div>

        <div class="asset-arrangement-row bottom-row">
            <a href="' . get_template_directory_uri() . '/' . $array['2r'] . '" download><div class="media-rectangle media-rectangle-large" style="background-image:url(' . get_template_directory_uri() . '/' . $array['2r'] . ')"></div></a>
            <a href="' . get_template_directory_uri() . '/' . $array['2'] . '" download><div class="media-square media-square-large" style="background-image:url(' . get_template_directory_uri() . '/' . $array['2'] . ')"></div></a> 
        </div>';
        return $build;
    };

?>

<div id="mast" class="full downscroll">
	<div class="header-content center">

		<a href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo('template_directory');?>/img/white-logo-big.png" alt="GATKU Polespears Logo" id="below-logo" class="left logo">
		</a>
		<div class="nav right">
			<ul class="clear">
				<li><a href="#" ng-click="toProductPage()" ng-class="{'link-bold' : productPage}">Product</a></li>
				<li><a href="#" ng-click="toBrandPage()" ng-class="{'link-bold' : brandPage}">Brand</a></li>

			</ul>
		</div>

	</div>
</div>
<div id="mobile-mast" class="header">
    <div class="mobile-mast-container">
        <a id="mobile-menu-hit" href=""><img src="<?php echo get_template_directory_uri();?>/img/mobile-menu.png" class="mobile-menu-activate"></a>
        <p id="mobile-titles" class="mobile-titles" ng-cloak>{{ productPage ? 'Product' : 'Brand' }}</p>
        
    </div>
</div>
<nav id="mobile-menu">
    <ul>
        <li><a href="#" ng-click="toProductPage()" ng-class="{'link-bold' : productPage}">Product</a></li>
        <li><a href="#" ng-click="toBrandPage()" ng-class="{'link-bold' : brandPage}">Brand</a></li>
        <li><a href="<?php bloginfo('url'); ?>">Return</a></li>
        
    </ul>
</nav>

<div class="media-module" ng-show="productPage" id="store-module">

    <div class="store-container" >

        <div class="heads" id="heads-store">

            <div class="thumbs">
                <a class="scrollto" id="m-store-sigpar" href="#sigpar-media"><img id="first" src="<?php echo get_template_directory_uri() . '/img/signature-paralyzer.png' ;?>"></a>
                <a class="scrollto" id="m-store-barpar" href="#barpar-media"><img src="<?php echo get_template_directory_uri() . '/img/barbed-paralyzer.png' ;?>"></a>
                <a class="scrollto" id="m-store-sliptip" href="#sliptip-media"><img src="<?php echo get_template_directory_uri() . '/img/slip-tip.png' ;?>"></a>
                <a class="scrollto" id="m-store-flopper" href="#flopper-media"><img id="last" src="<?php echo get_template_directory_uri() . '/img/flopper.png' ;?>"></a>
            </div>

            <div class="links">
                <a class="scrollto" href="#sigpar-media"> <strong>SIGNATURE</strong> <small>/PARALYZER</small></a>
                <a class="scrollto" href="#barpar-media"> <strong>BARBED</strong> <small>/PARALYZER</small></a>
                <a class="scrollto" id="slip-head-link" href="#sliptip-media"><strong>SLIP TIP</strong></a>
                <a class="scrollto" id="flop-head-link" href="#flopper-media"><strong>FLOPPER</strong></a>
            </div>

            
        </div>

        <div class="tails" id="tails-store">

            <div class="thumbs text-left">
                <a class="scrollto" id="m-store-sixfooter" href="#polespear-media" title="sixfooter"><img id="tail-first" src="<?php echo get_template_directory_uri() . '/img/polespear-end.png' ;?>"></a>
                <a class="scrollto" id="m-store-sevenfooter" href="#inshore-shrinker-media"><img src="<?php echo get_template_directory_uri();?>/img/inshore-shrinker.png"></a>
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </div>

            <div class="links">
                <a class="scrollto" href="#polespear-media" title="sixfooter"><strong>POLESPEARS</strong></a>
                <a class="scrollto" href="#polespear-media" title="sevenfooter"><strong>INSHORE SHRINKER</strong></a>
                
            </div>

            
        </div>

        

    </div>

</div>


<div class="media-module" ng-show="productPage" id="sigpar-media">
    <div class="container">
        <div class="media-column-left">
            <?php echo GridGenerator([
                '1' => 'img/downloads/signature-paralyzer-media/Signature_HiRes-1.jpg',
                '2' => 'img/Square/HeadsCollection_HiRes-2.jpg',
                '1r' => 'img/downloads/signature-paralyzer-media/Signature-RECT_HiRes-1r.jpg',
                '2r' => 'img/Rectangle/HeadsCollection-RECT_HiRes-2r.jpg',
                'Th' => 'img/downloads/signature-paralyzer-media/Signature_HiRes-1-th.jpg',
                'Thr' => 'img/downloads/signature-paralyzer-media/Signature-RECT_HiRes-1r-th.jpg'
            ])?>
        </div>

        <div class="media-column-right">
            <p class="product-title">SIGNATURE <span class="title-subscript">/paralyzer</span></p>
            <p class="product-description">When you download this it will include a product write up specific to our brand so please do not edit.
                Also in this download are thumbnails for named product plus 2 hi-res photos both in square &amp; rectangle crops. Make sure you follow MSRP.</p>
            <p class="fine-print">SMALLER FONT product information will help answer questions with consumer. If you need other assets from us
                please contact us and we will try to meet your needs. Thank you for representing our product, please do so in a consistent way
                to the guidelines provided here.</p>

            <a href="<?php echo get_template_directory_uri()?>/img/downloads/GATKU_SignatureParalyzer.zip" download><div class="media-download-button"><p>Download</p></div></a>
            <p class="media-download-info">Square Full + Thumb / Rectangle Full + Thumbnail / About Product .rtf file</p>

        </div>
    </div>
</div>

<div class="media-module" ng-show="productPage" id="barpar-media">
    <div class="container">
        <div class="media-column-left">
            <?php echo GridGenerator([
                '1' => 'img/downloads/barbed-paralyzer-media/Barbed_HiRes-1.jpg',
                '2' => 'img/Square/HeadsCollection_HiRes-2.jpg',
                '1r' => 'img/downloads/barbed-paralyzer-media/Barbed-RECT_HiRes-1r.jpg',
                '2r' => 'img/Rectangle/HeadsCollection-RECT_HiRes-2r.jpg',
                'Th' => 'img/downloads/barbed-paralyzer-media/Barbed_HiRes-1-th.jpg',
                'Thr' => 'img/downloads/barbed-paralyzer-media/Barbed-RECT_HiRes-1r-th.jpg'
            ])?>
        </div>

        <div class="media-column-right">
            <p class="product-title">BARBED <span class="title-subscript">/paralyzer</span></p>
            <p class="product-description">When you download this it will include a product write up specific to our brand so please do not edit.
                Also in this download are thumbnails for named product plus 2 hi-res photos both in square &amp; rectangle crops. Make sure you follow MSRP.</p>
            <p class="fine-print">SMALLER FONT product information will help answer questions with consumer. If you need other assets from us
                please contact us and we will try to meet your needs. Thank you for representing our product, please do so in a consistent way
                to the guidelines provided here.</p>

            <a href="<?php echo get_template_directory_uri()?>/img/downloads/GATKU_BarbedParalyzer.zip" download><div class="media-download-button"><p>Download</p></div></a>
            <p class="media-download-info">Square Full + Thumb / Rectangle Full + Thumbnail / About Product .rtf file</p>

        </div>
    </div>
</div>

<div class="media-module" ng-show="productPage" id="flopper-media">
    <div class="container">
        <div class="media-column-left">
            <?php echo GridGenerator([
                '1' => 'img/downloads/flopper-media/Flopper_HiRes-1.jpg',
                '2' => 'img/Square/HeadsCollection_HiRes-2.jpg',
                '1r' => 'img/downloads/flopper-media/Flopper-RECT_HiRes-1r.jpg',
                '2r' => 'img/Rectangle/HeadsCollection-RECT_HiRes-2r.jpg',
                'Th' => 'img/downloads/flopper-media/Flopper_HiRes-1-th.jpg',
                'Thr' => 'img/downloads/flopper-media/Flopper-RECT_HiRes-1r-th.jpg'
            ])?>
        </div>

        <div class="media-column-right">
            <p class="product-title">FLOPPER</p>
            <p class="product-description">When you download this it will include a product write up specific to our brand so please do not edit.
                Also in this download are thumbnails for named product plus 2 hi-res photos both in square &amp; rectangle crops. Make sure you follow MSRP.</p>
            <p class="fine-print">SMALLER FONT product information will help answer questions with consumer. If you need other assets from us
                please contact us and we will try to meet your needs. Thank you for representing our product, please do so in a consistent way
                to the guidelines provided here.</p>

            <a href="<?php echo get_template_directory_uri()?>/img/downloads/GATKU_Flopper.zip" download><div class="media-download-button"><p>Download</p></div></a>
            <p class="media-download-info">Square Full + Thumb / Rectangle Full + Thumbnail / About Product .rtf file</p>

        </div>
    </div>
</div>

<div class="media-module" ng-show="productPage" id="sliptip-media">
    <div class="container">
        <div class="media-column-left">
            <?php echo GridGenerator([
                '1' => 'img/downloads/slip-tip-media/SlipTip_HiRes-1.jpg',
                '2' => 'img/Square/HeadsCollection_HiRes-2.jpg',
                '1r' => 'img/downloads/slip-tip-media/SlipTip-RECT_HiRes-1r.jpg',
                '2r' => 'img/Rectangle/HeadsCollection-RECT_HiRes-2r.jpg',
                'Th' => 'img/downloads/slip-tip-media/SlipTip_HiRes-1-th.jpg',
                'Thr' => 'img/downloads/slip-tip-media/SlipTip-RECT_HiRes-1r-th.jpg'
            ])?>
        </div>

        <div class="media-column-right">
            <p class="product-title">SLIPTIP</p>
            <p class="product-description">When you download this it will include a product write up specific to our brand so please do not edit.
                Also in this download are thumbnails for named product plus 2 hi-res photos both in square &amp; rectangle crops. Make sure you follow MSRP.</p>
            <p class="fine-print">SMALLER FONT product information will help answer questions with consumer. If you need other assets from us
                please contact us and we will try to meet your needs. Thank you for representing our product, please do so in a consistent way
                to the guidelines provided here.</p>

            <a href="<?php echo get_template_directory_uri()?>/img/downloads/GATKU_SlipTip.zip" download><div class="media-download-button"><p>Download</p></div></a>
            <p class="media-download-info">Square Full + Thumb / Rectangle Full + Thumbnail / About Product .rtf file</p>

        </div>
    </div>
</div>

<div class="media-module" ng-show="productPage" id="inshore-shrinker-media">
    <div class="container">
        <div class="media-column-left">
            <?php echo GridGenerator([
                '1' => 'img/downloads/inshore-shrinker-media/InshoreShrinker_HiRes-1.jpg',
                '2' => '',
                '1r' => 'img/downloads/inshore-shrinker-media/InshoreShrinker-RECT_HiRes-1r.jpg',
                '2r' => '',
                'Th' => 'img/downloads/inshore-shrinker-media/InshoreShrinker_HiRes-1-th.jpg',
                'Thr' => 'img/downloads/inshore-shrinker-media/InshoreShrinker-RECT_HiRes-1r-th.jpg'
            ])?>
        </div>

        <div class="media-column-right">
            <p class="product-title">INSHORE SHRINKER</p>
            <p class="product-description">When you download this it will include a product write up specific to our brand so please do not edit.
                Also in this download are thumbnails for named product plus 2 hi-res photos both in square &amp; rectangle crops. Make sure you follow MSRP.</p>
            <p class="fine-print">SMALLER FONT product information will help answer questions with consumer. If you need other assets from us
                please contact us and we will try to meet your needs. Thank you for representing our product, please do so in a consistent way
                to the guidelines provided here.</p>

            <a href="<?php echo get_template_directory_uri()?>/img/downloads/GATKU_InshoreShrinker.zip" download><div class="media-download-button"><p>Download</p></div></a>
            <p class="media-download-info">Square Full + Thumb / Rectangle Full + Thumbnail / About Product .rtf file</p>

        </div>
    </div>
</div>


<div class="media-module" ng-show="productPage" id="polespear-media">
    <div class="container">
        <div class="media-column-left">
            <?php echo GridGenerator([
                '1' => 'img/downloads/polespear-media/Pole_HiRes-1.jpg',
                '2' => 'img/Square/PolesCollection_HiRes-2.jpg',
                '1r' => 'img/downloads/polespear-media/Pole-RECT_HiRes-1r.jpg',
                '2r' => 'img/Rectangle/PolesCollection-RECT_HiRes-2r.jpg',
                'Th' => 'img/downloads/polespear-media/Pole_HiRes-1-th.jpg',
                'Thr' => 'img/downloads/polespear-media/Pole-RECT_HiRes-1r-th.jpg'
            ])?>
        </div>

        <div class="media-column-right">
            <p class="product-title">POLE<span style="font-weight:400;">SPEARS</span></p>
            <p class="product-description">When you download this it will include a product write up for each of our poles SIX’ER, SEVEN’ER
                EIGHT’ER, NINE’ER and TEN’ER. Each is specific to our brand so please do not edit. Also in this download is universal thumbnails for poles plus
                2 hi-res photos both in square &amp; rectangle crops, also universal to all pole sizes. Make sure you follow MSRP.</p>
            <p class="fine-print">SMALLER FONT product information will help answer questions   with consumer. If you need other assets from us
                please contact us and we will try to meet your needs. Thank you for representing our product, please do so in a consistent way
                to the guidelines provided here.</p>

            <a href="<?php echo get_template_directory_uri()?>/img/downloads/GATKU_Polespear.zip" download><div class="media-download-button"><p>Download</p></div></a>
            <p class="media-download-info">Square Full + Thumb / Rectangle Full + Thumbnail / About Product .rtf file</p>

        </div>
    </div>
</div>


<div class="brand-container" ng-show="brandPage">

    <div class="container">

        <div class="brand-logo-description brand-dark brand-left brand-padding-right">
            <p>USE THIS ON <span class="bold">LIGHT</span> BACKGROUND &nbsp;-&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_LogoForDarkBG.png" download>PNG</a> &nbsp;|&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_LogoForDarkBG.png" download>SVG</a></p>
        </div>
        <div class="brand-logo-container brand-dark brand-left">
            <img src="<?php echo get_template_directory_uri();?>/img/media-page-assets/GATKU_LogoForDarkBG.png">
        </div>
        <div class="brand-logo-container brand-light brand-left brand-padding-right">
            <img src="<?php echo get_template_directory_uri();?>/img/media-page-assets/GATKU_LogoForLightBG.png">
        </div>
        <div class="brand-logo-description brand-light brand-left">
            <p>USE THIS ON <span class="bold">DARK</span> BACKGROUND &nbsp;-&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_LogoForLightBG.png" download>PNG</a> &nbsp;|&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_LogoForLightBG.png" download>SVG</a></p>
        </div>

        <div class="brand-logo-caps brand-dark">
            <p>ALL CAPS, NO DASH WHEN WRITING OUR NAME PLEASE : <span class="bold">GATKU</span></p>
        </div>
        <div class="brand-font-large brand-light brand-padding-right brand-left">
            <img src="<?php echo get_template_directory_uri();?>/img/media-page-assets/font-1.png">
        </div>
        <div class="brand-font-small brand-light brand-left">
            <img src="<?php echo get_template_directory_uri();?>/img/media-page-assets/font-2.png">
        </div>

        <div class="brand-color-block brand-dark">
            <img src="<?php echo get_template_directory_uri();?>/img/media-page-assets/off-black.png">
        </div>
        <div class="brand-color-block brand-dim">
            <img src="<?php echo get_template_directory_uri();?>/img/media-page-assets/mid-gray.png">
        </div>
        <div class="brand-color-block brand-light">
            <img src="<?php echo get_template_directory_uri();?>/img/media-page-assets/off-white.png">
        </div>

        <div class="brand-mid-titles brand-dark brand-half-padding-right brand-left">
            <p>BEST COLORS FOR OUR BRAND ^</p>
        </div>
        <div class="brand-mid-titles brand-dark brand-half-padding-left brand-left">
            <p>EXAMPLES <sub>v</sub> </p>
        </div>

        <div class="brand-ad-examples brand-light brand-half-padding-right brand-left" style="background-image:url('<?php echo get_template_directory_uri();?>/img/media-page-assets/triumph.jpg')"></div>
        <div class="brand-ad-examples brand-light brand-half-padding-left brand-left" style="background-image:url('<?php echo get_template_directory_uri();?>/img/media-page-assets/dive.jpg')"></div>

        <div class="brand-logo-caps brand-dark">
            <p>- mute colors accentuate our trademark red poles - a key brand element -</p>
        </div>

        <div class="brand-abstract-logo-container brand-light brand-left brand-half-padding-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/media-page-assets/GATKU_AbstractForLightBG.png">
        </div>
        <div class="brand-abstract-logo-description brand-light brand-left brand-half-padding-left">
            <p>NEW <span class="bold">ABSTRACT</span> SYMBOL &nbsp;-&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_AbsractForLightBG.png">PNG</a> &nbsp;|&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_AbsractForLightBG.png">SVG</a></p>
        </div>
        <div class="brand-abstract-logo-container brand-dark brand-right brand-half-padding-left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/media-page-assets/GATKU_AbstractForDarkBG.png">
        </div>
        <div class="brand-abstract-logo-description brand-dark brand-left brand-half-padding-right">
            <p>NEW <span class="bold">ABSTRACT</span> SYMBOL &nbsp;-&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_AbsractForDarkBG.png">PNG</a> &nbsp;|&nbsp; <a href="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/GATKU_AbsractForDarkBG.png">SVG</a></p>
        </div>

        <div class="brand-slogan brand-light">
            <img src="<?php echo get_template_directory_uri() ;?>/img/media-page-assets/slogan.png">
        </div>

    </div>

</div>


<div class="mobile-media-section-button" ng-click="toProductPage()" ng-show="brandPage"><p>Products</p></div>
<div class="mobile-media-section-button" ng-click="toBrandPage()" ng-show="productPage"><p>Brand</p></div>


<div class="media-contact" id="contact-window">
    <div class="contact-desktop">
        <div class="grey-space">
            <div class="top-contact-container">
                <p>Thank You for Visiting!</p>
                <p>It&#39;s a pleasure working with you. We hope
                to be very successful in our working relationship.
                Please let us know if we can help you 
                with anything else.
                </p>
            </div>
        </div>
        <div class="whitespace">
            <p><strong>THE GATKU</strong><br>1250 Pioneer Way Suite H, El Cajon, CA 92020</p>
            <p><strong>Customer Service</strong> - Email: dustin@gatku.com / Phone +001 619 507-3860</p>
            <div class="contact-logos">
                <img src="<?php echo get_template_directory_uri() ;?>/img/footer-images/instagram-grey.png">
                <img src="<?php echo get_template_directory_uri() ;?>/img/footer-images/facebook-grey.png">
                <img src="<?php echo get_template_directory_uri() ;?>/img/footer-images/twitter-grey.png">
                <img src="<?php echo get_template_directory_uri() ;?>/img/footer-images/youtube-grey.png">
            </div>
            <p><?php echo date('Y') ;?> &copy; GATKU / ALL RIGHTS RESERVED. <span class="fade">| &nbsp;<a href="http://www.troyhollinger.com">WE LOVE TROY</a>&nbsp;</span> | &nbsp;<a href="<?php bloginfo('url'); ?>">FULL WEBSITE</a></p>
        </div>
    </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script src="<?php echo get_template_directory_uri() ;?>/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ;?>/jquery.mmenu.js"></script>
<script>



    $(function() {
        var $menu = $('#mobile-menu'),
            $html = $('html, body');

        //  Toggle menu 
        $('#mobile-menu-hit').click(function(e) {
            e.stopImmediatePropagation();
            e.preventDefault();
            $menu.trigger( $menu.hasClass( 'mm-opened' ) ? 'close.mm' : 'open.mm' );          
        });
        $menu.mmenu();
        $menu.find( 'li > a' ).on( 'click', function() {
            var href = $(this).attr( 'href' );

            //  if the clicked link is linked to an anchor, scroll the page to that anchor 
            if ( href.slice( 0, 1 ) == '#' ) {
                $menu.one( 'closed.mm', function() {
                    setTimeout(function() {
                        // $html.animate({ scrollTop: $( href ).offset().top }); 
                    }, 10); 
                });            
            }
        });
    });

    var Grid = {

        init : function() {

            this.squarify();
            this.rectanglify();

            console.log("This should have been gridified.");

        },

        squarify : function() {

            $(".media-square").each(function(){

                var width = $(this).width();

                $(this).height(width);

            }); 

        },

        rectanglify : function() {

            $(".media-rectangle").each(function() {

                var width = $(this).width();

                $(this).height(width * 1.5);

            });

        }

    }

    
    $(document).ready(function() {

        Grid.init();

        //This code enables the snap to window when a certain link is clicked:
        $('a[href*=#]').bind('click', function(e) {
            e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump
             
            var target = $(this).attr("href"); //Get the target
            
            // perform animated scrolling by getting top-position of target-element and set it as scroll target
            $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 400, function() {
                location.hash = target;  //attach the hash (#jumptarget) to the pageurl
            });
            
            return false;
        });

    });

    $(window).resize(function() {

        Grid.init();

    });


    var app = angular.module('media', []);

    app.controller('MediaController', function($scope) {

        // Determines which page is shown first on load.
        $scope.productPage = true;
        $scope.brandPage = false;

        $scope.toProductPage = function() {

            $scope.productPage = true;
            $scope.brandPage = false;
            
            //Fixes bug where grid initiation is premature
            //to images loading.
            setTimeout(function(){Grid.init()}, 200);


        }

        $scope.toBrandPage = function() {

            $scope.productPage = false;
            $scope.brandPage = true;


        }

    });


</script>


</body>
</html>






























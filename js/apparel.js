'use strict';

function mobile() {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		return true;
	} else {
		return false;
	}
}

var rootPath = templatePath + '/img/apparel/';

var apparelRotator = function(element, rate, imageArray) {

	var _ = this;
	_.container = element;
	_.imageContainer = _.container.find('.apparel-image');
	_.image = _.container.find('.image');
	_.oldX = 0;
	_.oldDiff = null; 
	_.lastMove = "none";
	_.lastMoveConstant = "none";
	_.previousX = 0;
	_.i = 0;
	_.mobileRate = rate / 3;

	_.init = function() {

		// Test for smartphone browser. 
		// Source : http://stackoverflow.com/questions/3514784/what-is-the-best-way-to-detect-a-handheld-device-in-jquery
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 			_.touchIsMoving();
		} else {
			_.drag();
		}

	};

	_.images = imageArray;

	_.drag = function() {

		var dragging = false;

		_.image.mousedown(function(e) {
			e.preventDefault;
			if (!dragging) {
				dragging = true;
			}
		});

		$("body").mousemove(function(e) {
			e.preventDefault;
			if (dragging) {
				var xcoord = e.clientX;

				_.changeLogic(xcoord, rate);
			}
		});

		$("body").mouseup(function(e) {
			e.preventDefault;
			if(dragging) {
				dragging = false;
			}
		});

	};

	_.mouseIsMoving = function() {

		$("body").mousemove(function(e) {

			var xcoord = e.pageX;
			var deviceRate = rate;

			_.changeLogic(xcoord, deviceRate);

		});
	};

	_.touchIsMoving = function() {
		 
		$(window).on('touchmove', function(ev) {

			var e = ev.originalEvent;
			var xcoord = e.pageX;
			var deviceRate = _.mobileRate;
			
			_.changeLogic(xcoord, deviceRate);

			//$("#span-2").html(e.pageX);
		});
	}

	_.changeLogic = function(xcoord, deviceRate) {

		if(_.oldDiff === null) {
			// If this is the first move, set _.oldDiff to
			// the current x coordinate and call the rotate method
			// at this current coordinate.
			_.oldDiff = xcoord;
			_.rotate(xcoord);

		}

		// Set the last direction moved for use in the
		// conditionals below.
		if( xcoord > _.oldDiff ) {
			_.lastMoveConstant = 'right';
		} else if (xcoord < _.oldDiff ) {
			_.lastMoveConstant = 'left';
		};
		

		if ( xcoord > _.previousX && _.lastMoveConstant === 'left' ) {
			// If moving right AND the last move was to the left, reset
			// oldDiff to current x position and iterate i by 1 to fix
			// image repition bug.

			_.oldDiff = xcoord;
			_.i++;
			

		} else if ( xcoord < _.previousX && _.lastMoveConstant === 'right' ) {
			// If moving left AND the last move was to the right, reset
			// oldDiff to current x position and de-iterate i by 1 to fix
			// image repition bug.

			_.oldDiff = xcoord;
			_.i--;
		
		}

		// Only call the rotate method when amount of pixels traveled
		// is greater than the specified rate.
		if (Math.abs(xcoord - _.oldDiff) > deviceRate) {

			_.rotate(xcoord);

			_.oldDiff = xcoord;
		}

		_.previousX = xcoord;

	}

	_.rotate = function(xcoord) {

		if(xcoord > _.oldX) {
			// moving right.

			if(_.lastMove === 'left') {
				// Fixes glitch when changing directions.
				_.i++;
			} 

			if(_.i > _.images.length) {
				_.i = 0;
			}

			_.image.attr('src', _.images[_.i]);

			if (_.i >= _.images.length) {
				_.i = 0;
			} else {
				_.i++;
			}

			// Record last move direction.
			_.lastMove = 'right';

		} else if( xcoord < _.oldX ) {
			// moving left.

			if(_.lastMove === 'right') {
				// Fixes glitch when changing directions.
				_.i--;
			}

			if(_.i < 0) {
				_.i = _.images.length;
			}

			_.image.attr('src', _.images[_.i]);

			if (_.i <= 0) {
				_.i = _.images.length;
			} else {
				_.i--;
			}

			// Record last move direction.
			_.lastMove = 'left';

		} 

		// Record the last x position for use when the method is called again.
		_.oldX = xcoord;

	}

}



var apparel = {
	init : function() {
		var _ = this;

		_.create();

	},
	shirtImages : [

		[ 
			rootPath + 'shirt2/shirt2-1.jpg', 
			rootPath + 'shirt2/shirt2-2.jpg', 
			rootPath + 'shirt2/shirt2-3.jpg',
			rootPath + 'shirt2/shirt2-4.jpg', 
			rootPath + 'shirt2/shirt2-5.jpg', 
			rootPath + 'shirt2/shirt2-6.jpg', 
			rootPath + 'shirt2/shirt2-7.jpg',
			rootPath + 'shirt2/shirt2-8.jpg'
		],

		[ 
			rootPath + 'shirt1/shirt1-1.jpg', 
			rootPath + 'shirt1/shirt1-2.jpg', 
			rootPath + 'shirt1/shirt1-3.jpg',
			rootPath + 'shirt1/shirt1-4.jpg', 
			rootPath + 'shirt1/shirt1-5.jpg', 
			rootPath + 'shirt1/shirt1-6.jpg', 
			rootPath + 'shirt1/shirt1-7.jpg',
			rootPath + 'shirt1/shirt1-8.jpg'
		],
		
		[ 
			rootPath + 'jacket1/jacket1-1.jpg', 
			rootPath + 'jacket1/jacket1-2.jpg', 
			rootPath + 'jacket1/jacket1-3.jpg',
			rootPath + 'jacket1/jacket1-4.jpg', 
			rootPath + 'jacket1/jacket1-5.jpg', 
			rootPath + 'jacket1/jacket1-6.jpg', 
			rootPath + 'jacket1/jacket1-7.jpg',
			rootPath + 'jacket1/jacket1-8.jpg'
		]
	],
	create : function() {
		var _ = this;
		// var shirt1 = new apparelRotator($("#shirt-1"), 20, _.shirtImages[0]);
		// var shirt2 = new apparelRotator($("#shirt-2"), 20, _.shirtImages[1]);
		// var shirt3 = new apparelRotator($("#shirt-3"), 20, _.shirtImages[2]);

		$("#apparel-1").rollerblade({
			imageArray : _.shirtImages[0],
			sensitivity : 20
		});
		$("#apparel-2").rollerblade({
			imageArray : _.shirtImages[1],
			sensitivity : 20
		});
		$("#apparel-3").rollerblade({
			imageArray : _.shirtImages[2],
			sensitivity : 20
		});

		// shirt1.init();
		// shirt2.init();
		// shirt3.init();
	}
}



$(document).ready(function() {


	if (!mobile()){
		
		$(".apparel-carousel").skippr({
			speed : 400,
			easing: 'ease'
		});
	}
	

	
	apparel.init();	


	if (mobile()) {

		//Mobile menu functionality (code from plugin called mmenu)
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
		                    $html.animate({ scrollTop: $( href ).offset().top }); 
		                }, 10); 
		            });            
		        }
		    });
		});

	}
	
	if(window.location.hash) {
	 
		var hashValue = window.location.hash.replace('#', '');
	 
		$('.apparel-carousel').data().skippr.skipTo(hashValue);
	 
	}

	// Add the drop down arrow to shirt sizes select.
	$(".addon-row select").after("<div id='bands-select-arrow'> </div>");

});







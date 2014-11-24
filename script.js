function mobile() {
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        return true;
    } else {
        return false;
    }
}


$(document).ready(function() {

    // New Feature : Info Modules for Products.
    // Added 3/31/14.

    var infoModule = {
        // Object for the new info Module.
        init : function() {
            infoModule.showFirst();
            infoModule.tabActive();
            infoModule.slightTabBorder();
            infoModule.setHeight();
        },
        resize : function() {
            infoModule.setHeight();
        },
        showFirst : function() {
            // Shows correct info module section on load.
            $(".sectionFirst").show();
        },

        tabActive : function() {
            // Applies active/inactive styles for module tabs.
            var $tabs = $(".info-module-tab");

            $tabs.click(function(){
                var $tabContext = $(this).parent().find('.info-module-tab'),
                    activates = $(this).attr('activates');

                $tabContext.removeClass('info-module-active');
                $(this).addClass('info-module-active');
                infoModule.sectionShow(activates, $(this))
            });
        },

        sectionShow : function(chosen, context) {
            // Choses correct section to show, passed to tabActive.
            context.parent().prev().children("div").hide();
            context.parent().prev().children("." + chosen + "-section").show();
        },

        difficultyHover : function() {
            // TODO: hover functionality for difficulty section.
            // Possible later addition.
        },

        slightTabBorder : function() {
            // Adds border div with css class to tabs. 
            $(".info-module-tab").each(function(){
                $(this).append("<div class='tab-slight-border'></div>");
            });
        },
        setHeight: function(){
            var $modules = $(".info-module"),
                theWidth = $modules.width(),
                factor = 0.58;
            $modules.each(function(){
                $(this).height(theWidth * factor);
            });
            $modules.promise().done()

        }

    } 
   

    var addToCart = {
        // Add to cart module object
        init : function() {
            addToCart.setHeight();
        },
        resize : function() {
            addToCart.setHeight();
        },
        setHeight : function() {
            // Sets height of module in relation to height of
            // info module to the left. Is called in infoModule 
            // setHeight method.

            var infoModuleHeight = $(".info-module").height(),
                factor = 0.95;
            $(".echeckbox").each(function(){ 
                $(this).height(infoModuleHeight * factor);
            });
        }
    } 

    infoModule.init();
    addToCart.init();


    $(window).resize(function(){
        infoModule.resize();
        addToCart.resize();
    });


    //Enable Mobile Menu
    if (mobile()) {
        $("#mobile-menu").mmenu();    
    }
    


    //Enable Carousel Blurbs in home section.
    $('#owl-example').owlCarousel();


    //Sets polespear image size toggle square to starting styles
    $('.actual-size-button').css('background-color', 'black');


    function isMobile() {
        if ( $("#mast").css("display") == "none" ) {
            return true;
        } else {
            return false;
        }          
    }


    var loadingScreen = {
        init : function() {
            loadingScreen.fadeOut();
        },
        fadeOut : function() {
            setTimeout(function(){
                $("#blinder").fadeOut(800);
            }, 2500);
        }
    }
    loadingScreen.init();

    var selectArrow = {
        // Object for polespear selection arrow
        init : function() {
            if(!isMobile()) {
                $('select.poles-menu').change( selectArrow.values );
                selectArrow.values();
                selectArrow.placement();

            }
        },

        placement : function() {
            //sets the correct position of the Polespear section dropdown arrow. 

            var selection = $( "select.poles-menu" ).val(),
            $positioner = $('.' + selection + " .p-product-title").find("small"),
            positionerOffset = $positioner.offset().left,
            positionerOffsetTop = $positioner.position().top + $("." + selection + " .polespear-content").position().top + $("." + selection).position().top ;

            $(".pole-product-title").css({
                left: positionerOffset + 100,
                top: positionerOffsetTop - 70
            });
        }, 

        values : function() {
            // determines which pole to show based on the selection 
            // of the pole dropdown 

            var selection = $( "select.poles-menu" ).val();
            $(".sixfooter,.sevenfooter, .eightfooter,.ninefooter,.tenfooter").hide();
            $('.' + selection).toggle(); 
            correctLeft();
            selectArrow.placement();

        }
    }
    selectArrow.init();


    var inshoreLabels = {
        //Object for inshore shrinker add on labels.
        styling : function(callback){
            //applies red color to inshore labels.
            var labels = $(".eshop input + label");
            labels.each(function(){
                var strings = $(this).html();
                if(strings.indexOf('InshoreShrinker') != -1) {
                    $(this).addClass('inshore-label');
                }
            });
            labels.promise().done(callback);
        },

        attachments: function() {
            //attaches red star and red manginfying glass to ends of inshore labels.
            var theLabels = $(".inshore-label");
            theLabels.each(function(){
                $(this).prepend("<img src='"+directory+"/img/red-star.png' class='redstar'>")
                       .append("<a href='#inshore-shrinker'><img src='"+directory+"/img/magnify.png' class='magnify'></a>");
            });
        }

    }
    inshoreLabels.styling(inshoreLabels.attachments);



    var spearSizeToggle = {
        // Object for polespear size toggle switches.
        init: function() {
            $(".image-size-controller span:first-child").click(spearSizeToggle.actualSize);
            $(".image-size-controller span:last-child").click(spearSizeToggle.fitScreen);
        },

        fitScreen: function() {
             //Enables polespear image size toggle squares
            var theBase = $(this).attr('base');
            $("#" + theBase + "-image").removeClass('polespear-image').addClass('polespear-image-fit');
            $(this).css('background-color', 'black');
            $('#' + theBase + '-actual-size').css('background-color', 'LightGrey');
            $('#' + theBase + '-arrows').hide();
            console.log("in an object!");
        },

        actualSize: function() {
            //Click for pole image to be actual size
            var theBase = $(this).attr('base');
            $("#" + theBase + "-image").removeClass('polespear-image-fit').addClass('polespear-image');
            correctLeft();
            $(this).css('background-color', 'black');
            $('#' + theBase + '-fit-screen').css('background-color', 'LightGrey');
            $('#' + theBase + '-arrows').show();
            console.log("in an object too!");
        }
    }
    spearSizeToggle.init();
   

    var downArrows = {
        //object for small arrows under next-page bubbles.
        init : function() {
            downArrows.pulse();
        },
        bubbleIsHovered : function() {
            //Enable lock-to-next-screen bubble functionality & animation

            $(".bubble-arrow").hide();
            $(".bubble").hover(function(){
                $(".bubble-arrow").fadeIn('fast');
                clearInterval(downArrows.pulse());
            },function(){
                $(".bubble-arrow").stop().fadeOut('fast');
                downArrows.pulse();
            });
        },
        pulse : function() {
            setInterval(function(){
                $(".bubble-arrow").fadeIn().delay(750).fadeOut();
            }, 2000);
        }

    }
    downArrows.init();

    

   
    $("#bands-window select").after("<div id='bands-select-arrow'> </div>");
        

    //TODO : Write function for video link highlighting.



    function vidSelect() {
        //displays video based on selection.

        $(".vid-click").click(function(){
            $("iframe, .video-description div").css('display', 'none');
            var activates = $(this).attr('activates'),
                $vid = $("." + activates ),
                $desc = $("." + activates + "-description");
            $vid.show();
            $desc.show();
        });
    }

    //activate vidSelect
    if(!isMobile()) {
        $(".secondary-vid, .secondary-vid-description").hide();
        vidSelect();
    }  
        
    
    function disappearFix() {
        //fixes a bug that causes pole section to randomly disappear.
        $('#polespear-section').waypoint(function(down) {
            var select = $( "select.poles-menu" ).val();
            $('.' + select).show();
        }, {
            offset: function() {
            return $(this).height();
            }
        }); 
    }
    disappearFix();
    
    
    function thumbClick() {
        //Displays correct pole based on what thumbnail user clicks in the store.
        var polename = $(this).attr('title');
        $(".sixfooter,.sevenfooter, .eightfooter,.ninefooter,.tenfooter").hide();
        $('.' + polename).toggle();
        correctLeft();
        
        $('select.poles-menu').val(polename); 
        selectArrow.placement(); 
    };

    //Activates function above.
    $('.thumbs a, .links a').click(thumbClick);


    var $belowLogo = $("#below-logo"),
        $windowTwo = $(".window2"),
        $homeLogo = $("#home-logo"),
        $theMast = $("#mast");


    function stickyMast() {
        $belowLogo.hide();
        
        //Scrolling down
        $windowTwo.waypoint(function(down) {
            $theMast.addClass('downscroll').removeClass('header');
            $belowLogo.show();
            $homeLogo.hide(); },
            { offset: 50}
        );
        //Scrolling Up
        $windowTwo.waypoint(function(up) {
            $theMast.addClass('header').removeClass('downscroll');
            $belowLogo.hide();
            $homeLogo.show();},
            { offset: 100 }
        );
    }
    stickyMast();

    function discountBar() {

        var discountAppearAt = $("#sigpar");
        var discountRemoveAt = $("#video-window");
        var saleBanner = $(".sale-banner");

        if ($(window).scrollTop() > discountAppearAt.position().top && $(window).scrollTop() < discountRemoveAt.position().top) {

            saleBanner.fadeIn();
        
        } else {

            saleBanner.fadeOut();
        
        }

    }

    if (!mobile()) {

        $(window).scroll(function() {
            discountBar();  
        });    
        
    }

    
    

    function refreshMast() {
        // fixes bug that prevents nav bar from showing if refreshed 
        // below the fold.
        if ( $(window).scrollTop() > $(window).height()) {
            $theMast.addClass('downscroll').removeClass('header');
            $belowLogo.show();
            $homeLogo.hide();
        }
    }
    refreshMast();

    
    function navBolding(target,link,upOffset,downOffset) {
        //Enables navigation bolding when user is in corresponding section.
        target.waypoint(function(up) {
            link.removeClass('link-bold') },
        { offset: upOffset}
        ); 
        
        target.waypoint(function(up) {
            link.addClass('link-bold');
        }, {
        offset: function() {
          return -$(this).height();
        }
        });
        target.waypoint(function(down) {
            link.addClass('link-bold');
            
        },
        { offset: downOffset}
        );
        target.waypoint(function(down) {
            link.removeClass('link-bold');
        }, {
        offset: function() {
        return -$(this).height();
        }
        });
    }

    var $store_window = $(".window2"),
        $store_link = $(".store-link"),
        $video_window = $("#video-window"),
        $video_link = $(".video-link"),
        $you_window = $('#you-window'),
        $you_link = $('.you-link'),
        $contact_window = $("#contact-window"),
        $contact_link = $(".contact-link");


    navBolding($store_window, $store_link, 100, 50);
    navBolding($video_window, $video_link, 100, 50);
    navBolding($you_window, $you_link, 100, 50);
    navBolding($contact_window, $contact_link, 100, 50);


    //This code enables the snap to window when a certain link is clicked:
    $('.scrollto').bind('click', function(e) {
        e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump
         
        var target = $(this).attr("href"); //Get the target
        
        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 400, function() {
            location.hash = target;  //attach the hash (#jumptarget) to the pageurl
        });
        
        return false;
    });


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


    //creates function that checks whether element exists.
    $.fn.exists = function(callback) {
        var args = [].slice.call(arguments, 1);

        if (this.length) {
          callback.call(this, args);
        }

        return this;
    };


    //Adds proper Labels to the store on smaller screens.
    $('.thumb-containers').exists(function(){
    $("#heads-store .thumb-containers:first-child").after('<p class="mobile-store-titles"><strong>Paralyzer</strong><small>/SIGNATURE</small></p>');
    $("#heads-store .thumb-containers:nth-of-type(2)").after('<p class="mobile-store-titles"><strong>Paralyzer</strong><small>/BARBED</small></p>');
    $("#heads-store .thumb-containers:nth-of-type(3)").after('<p class="mobile-store-titles"><strong>Slip-tip</strong</p>');
    $("#heads-store .thumb-containers:nth-of-type(4)").after('<p class="mobile-store-titles"><strong>Flopper</strong></p>');
    $("#tails-store .thumb-containers:nth-of-type(1)").after('<p class="mobile-store-titles"><strong>Six</strong>\'er<small>/182cm</small></p>');
    $("#tails-store .thumb-containers:nth-of-type(2)").after('<p class="mobile-store-titles"><strong>Seven</strong>\'er<small>/213cm</small></p>');
    $("#tails-store .thumb-containers:nth-of-type(3)").after('<p class="mobile-store-titles"><strong>Eight</strong>\'er<small>/243cm</small></p>');
    $("#tails-store .thumb-containers:nth-of-type(4)").after('<p class="mobile-store-titles"><strong>Nine</strong>\'er<small>/274cm</small></p>');
    $(".tails .thumb-containers:nth-of-type(5)").after('<p class="mobile-store-titles"><strong>Ten</strong>\'er<small>/304cm</small></p>');
    $(".extras .thumb-containers:nth-of-type(1)").after('<p class="mobile-store-titles"><strong>Inshore Shrinker</strong></p>');
    $(".extras .thumb-containers:nth-of-type(2)").after('<p class="mobile-store-titles"><strong>Budk Knife</strong></p>');
    $(".extras .thumb-containers:nth-of-type(3)").after('<p class="mobile-store-titles"><strong>Bands</strong></p>');

    });

    //YOU SECTION 

    //correctly sizes customer photos so that 5 fit on one row with equal margins.
    function tiles() {
        var $youcontainerwidth = $('#you-container').width() * 0.18 + "px";
        $(".you-pic-container").css('width', $youcontainerwidth);
        var $youWidth = $(".you-pic-container").width() + "px";
        $(".you-pic-container").css('height', $youWidth);
    };

    tiles();

    $(window).resize(function() {
        tiles();
        selectArrow.placement();
    });


    //groups 15 images into one carousel pane.
    var $youImg = $("#you-carousel .you-a-container");
    for (var i = 0; i < $youImg.length; i += 15) {
        var $div = $("<div/>", {
            class: 'you-pane'
        });
        $youImg.slice(i, i + 15).wrapAll($div);
    };
    //activates carousel for YOU
    $('#you-carousel').owlCarousel({autoPlay : false,});

    //Hides left arrow when in first YOU pane. 
    var youOwlPrev = $('#you-carousel .owl-prev');
    youOwlPrev.hide();
    $('#you-carousel .owl-next, #you-carousel .owl-pagination .owl-page:nth-of-type(n+1)').click(function(){
        youOwlPrev.fadeIn('slow');
    });
    $('#you-carousel .owl-pagination .owl-page:nth-of-type(1)').click(function(){
        youOwlPrev.fadeOut('slow');
    });
    youOwlPrev.click(function(){
        if($('#you-carousel .owl-pagination .owl-page:nth-of-type(1)').hasClass('active')) {
            youOwlPrev.fadeOut('slow');
        }
    });

    //END YOU SECTION


    $(".checkout-exists").exists(function(){
        $("#below-logo").show();
    });

    $("#barpar .product-title").append("<span><small><small><small><small><small><small> /PARALYZER</small></small></small></small></small></small></span>");
    $("#sigpar .product-title").append("<span><small><small><small><small><small><small> /PARALYZER</small></small></small></small></small></small></span>");


});

function whiteMast() {
    $('#mobile-mast').css('background-color', 'rgba(255,255,255,.95)');
}
function clearMast() {
    $('#mobile-mast').css('background-color', 'transparent');
}
function scrollUp() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
}
function correctLeft() {
      $("#signature-paralyzer-id").scrollLeft($("#signature-paralyzer-image").width() - 600);
      $("#barbed-paralyzer-id").scrollLeft($("#barbed-paralyzer-image").width() -500);
      $("#flopper-head-id").scrollLeft($("#flopper-head-image").width()-500);
      $("#slip-tip-id").scrollLeft($("#slip-tip-image").width()-500);
      $("#inshore-id").scrollLeft($("#inshore-image").width() - 3000);
}
function mobileBreak() {
    $(".thumbs a").wrap("<div class='thumb-containers'></div>");
    $(".sixfooter").show();
    $(".sixfooter,.sevenfooter, .eightfooter,.ninefooter,.tenfooter").addClass('window').unwrap();
    //re-arranges video to display before corresponding video description.
    $('.vid-1-description').before($('.vid-1'));
    $('.vid-2-description').before($('.vid-2'));
    $('.vid-3-description').before($('.vid-3'));
    $('.vid-4-description').before($('.vid-4'));
    $('.vid-5-description').before($('.vid-5'));
    $('.vid-6-description').before($('.vid-6'));

    $('.video').unwrap();
    $('.video1').hide();
    $(".video-description div").addClass('v-des');
    $("iframe").wrap("<div class='video1'></div>")

    $("#you-window").detach();

    var $area = $('.window');
    var $notHome = $('.mobile-logo');
    $area.hide();
    $('.window1').show();


    $('#m-click-heads').click(function(){
        $area.hide();
        $('#store').show();
        $('#mobile-titles').html('STORE');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-home').click(function(){
        $area.hide();
        $('#home').show();
        $('#mobile-titles').html('');
        $notHome.show();
        clearMast();
        scrollUp();
    });
    $('#m-polespear').click(function(){
        $area.hide();
        $('#polespear-section').show();
        $('#mobile-titles').html('POLESPEARS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-sigpar').click(function(){
        $area.hide();
        $('#sigpar').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-barpar').click(function(){
        $area.hide();
        $('#barpar').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-flopper').click(function(){
        $area.hide();
        $('#flopper').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-sliptip').click(function(){
        $area.hide();
        $('#sliptip').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-polespear').click(function(){
        $area.hide();
        $('#store')
        $('#store').show();
        $('#mobile-titles').html('STORE');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-sixfooter').click(function(){
        $area.hide();
        $('.sixfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        // correctLeft();
    });
    $('#m-sevenfooter').click(function(){
        $area.hide();
        $('#polespear-section')
        $('.sevenfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        // correctLeft();
    });
    $('#m-eightfooter').click(function(){
        $area.hide();
        $('#polespear-section')
        $('.eightfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();
    // correctLeft();
    });
    $('#m-ninefooter').click(function(){
        $area.hide();
        $('#polespear-section')
        $('.ninefooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();
    // correctLeft();
    });
    $('#m-tenfooter').click(function(){
        $area.hide();
        $('#polespear-section')
        $('.tenfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();
    // correctLeft();
    });
    $('#m-extras').click(function(){
        $area.hide();
        $('#store').show();
        $('#mobile-titles').html('STORE');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-inshore-shrinker').click(function(){
        $area.hide();
        $('#inshore-shrinker').show();
        $('#mobile-titles').html('ACCESSORIES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-knife').click(function(){
        $area.hide();
        $('#knife').show();
        $('#mobile-titles').html('ACCESSORIES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-bands-window').click(function(){
        $area.hide();
        $('#bands-window').show();
        $('#mobile-titles').html('ACCESSORIES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });
    $('#m-video').click(function(){
        $area.hide();
        $('#video-window').show();
        $('#mobile-titles').html('VIDEOS');
        $notHome.hide();
        whiteMast();
        scrollUp();
    });
    $('#m-contact').click(function(){
        $area.hide();
        $('#contact-window').show();
        $('#mobile-titles').html('CONTACT');
        $notHome.hide();
        whiteMast();
        scrollUp();
    });
    $('#m-store-sliptip').click(function(){
        $area.hide();
        $('#sliptip').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        setTimeout(function() {
            correctLeft();
        }, 10); 
    });
    $('#m-store-barpar').click(function(){
        $area.hide();
        $('#barpar').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        setTimeout(function() {
          correctLeft();
        }, 10);
    });
    $('#m-store-sigpar').click(function(){
        $area.hide();
        $('#sigpar').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        setTimeout(function() {
          correctLeft();
        }, 10);
    });
    $('#m-store-flopper').click(function(){
        $area.hide();
        $('#flopper').show();
        $('#mobile-titles').html('HEADS');
        $notHome.hide();
        whiteMast();
        scrollUp();
        setTimeout(function() {
          correctLeft();
        }, 10);
    });
    $('#m-store-sixfooter').click(function(){
        $area.hide();
        $('.sixfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();
    });
    $('#m-store-sevenfooter').click(function(){
        $area.hide();
        $('.sevenfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();

    });
    $('#m-store-sevenfooter').click(function(){
        $area.hide();
        $('.sevenfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();

    });
    $('#m-store-eightfooter').click(function(){
        $area.hide();
        $('.eightfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();

    });
    $('#m-store-ninefooter').click(function(){
        $area.hide();
        $('.ninefooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();

    });
    $('#m-store-tenfooter').click(function(){
        $area.hide();
        $('.tenfooter').show();
        $('#mobile-titles').html('POLES');
        $notHome.hide();
        whiteMast();
        scrollUp();

    });
    $('#m-store-inshore-shrinker').click(function(){
        $area.hide();
        $('#inshore-shrinker').show();
        $('#mobile-titles').html('ACCESSORIES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        setTimeout(function() {
          correctLeft();
        }, 10);
    });
    $('#m-store-knife').click(function(){
        $area.hide();
        $('#knife').show();
        $('#mobile-titles').html('ACCESSORIES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        setTimeout(function() {
          correctLeft();
        }, 10);
    });
    $('#m-store-bands-window').click(function(){
        $area.hide();
        $('#bands-window').show();
        $('#mobile-titles').html('ACCESSORIES');
        $notHome.hide();
        whiteMast();
        scrollUp();
        correctLeft();
    });

}

//Adds containers to individual thumbnails in the store to achieve correct visual design. 
if ($("#mast").css("display") === "none" ){
    mobileBreak();
} else {};


//failsafe, causes polespear images to align right instead of left. 
window.onload = function() {
    correctLeft();      
};



// $(window).resize(function() {
  
//   if ($("#mast").css("display") === "none" ){
//     mobileBreak();
//   } else {};
//  });

$(window).load(function() {
    //fades out loader div when page has loaded.
    //$("#blinder").fadeOut(800);
});























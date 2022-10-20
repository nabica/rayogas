<!doctype html>

<html lang="en">

<head>







    <title>Rayogas - Un cálido compromiso</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="catalog/js/jquery.min.1.7.js"></script>

    <script type="text/javascript" src="catalog/js/modernizr.2.5.3.min.js"></script>

    <script type="text/javascript" src="catalog/js/hash.js"></script>



</head>

<body>





    <style type="text/css">
    .animated {
        cursor: zoom-in;
    }

    .zoom-in {
        cursor: zoom-out;
    }

    .next-button,
    .previous-button {
        cursor: pointer;
    }

    .but-credit {

        background-color: #2DCCCD;

        padding: 10px 20px;

        font-family: 'BentonSansBBVA-Book';

        font-size: 14px;

        color: white;

        text-align: center;

        border: 0;

        cursor: pointer;

        margin: 10px;

        text-decoration: none;

    }

    .but-soat {

        background-color: #da3851;

        padding: 10px 20px;

        font-family: 'BentonSansBBVA-Book';

        font-size: 14px;

        color: white;

        text-align: center;

        border: 0;

        cursor: pointer;

        margin: 10px;

        text-decoration: none;

    }

    .solicitud-mod {

        position: absolute;

        top: 0px;

        display: flex;

        justify-content: center;

        background-color: #072146;

        width: 100%;

        padding: 0px;

        z-index: 500;

    }
    </style>



    <div id="canvas">



        <!--<div class="zoom-icon zoom-icon-in"></div>-->

        <div class="magazine-viewport">



            <div class="container">

                <div class="magazine">



                    <!-- Next button -->

                    <div ignore="1" class="next-button"></div>

                    <!-- Previous button -->

                    <div ignore="1" class="previous-button"></div>

                </div>

            </div>





        </div>



        <!-- Thumbnails -->

        <!--<div class="thumbnails">

		<div>

			<ul>

				<li class="i">

					<img src="pages/1-thumb.jpg" width="76" height="91" />

					<span>1</span>

				</li>

				<li class="d">

					<img src="pages/2-thumb.jpg" width="76" height="91" />

					<img src="pages/3-thumb.jpg" width="76" height="91" />

					<span>2-3</span>

				</li>

				<li class="d">

					<img src="pages/4-thumb.jpg" width="76" height="91" />

					<img src="pages/5-thumb.jpg" width="76" height="91" />

					<span>4-5</span>

				</li>

				<li class="d">

					<img src="pages/6-thumb.jpg" width="76" height="91" />

					<img src="pages/7-thumb.jpg" width="76" height="91" />

					<span>6-7</span>

				</li>

	

			</ul>

		</div>

	</div>-->

    </div>



    <script type="text/javascript">
    function loadApp() {



        $('#canvas').fadeIn(1000);

        var flipbook = $('.magazine');



        // Check if the CSS was already loaded

        if (flipbook.width() == 0 || flipbook.height() == 0) {

            setTimeout(loadApp, 10);

            return;

        }



        // Create the flipbook

        flipbook.turn({

            width: 1300,

            height: 998,

            duration: 1000,

            acceleration: !isChrome(),

            gradients: true,

            autoCenter: true,

            elevation: 0,

            pages: 20,



            // Events

            when: {

                turning: function(event, page, view) {

                    var book = $(this),

                        currentPage = book.turn('page'),

                        pages = book.turn('pages');

                    // Update the current URI

                    Hash.go('page/' + page).update();

                    // Show and hide navigation buttons

                    disableControls(page);

                    $('.thumbnails .page-' + currentPage).

                    parent().

                    removeClass('current');

                    $('.thumbnails .page-' + page).

                    parent().

                    addClass('current');

                },

                turned: function(event, page, view) {

                    disableControls(page);

                    $(this).turn('center');

                    if (page == 1) {

                        $(this).turn('peel', 'br');

                    }

                },

                missing: function(event, pages) {

                    // Add pages that aren't in the magazine

                    for (var i = 0; i < pages.length; i++)

                        addPage(pages[i], $(this));

                }

            }

        });



        // Zoom.js

        $('.magazine-viewport').zoom({

            flipbook: $('.magazine'),

            max: function() {

                return largeMagazineWidth() / $('.magazine').width();

            },

            when: {

                swipeLeft: function() {

                    $(this).zoom('flipbook').turn('next');

                },

                swipeRight: function() {

                    $(this).zoom('flipbook').turn('previous');

                },

                resize: function(event, scale, page, pageElement) {

                    if (scale == 1)

                        loadSmallPage(page, pageElement);

                    else

                        loadLargePage(page, pageElement);

                },

                zoomIn: function() {

                    $('.thumbnails').hide();

                    $('.made').hide();

                    $('.magazine').removeClass('animated').addClass('zoom-in');

                    $('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');

                    if (!window.escTip && !$.isTouch) {

                        escTip = true;

                        $('<div />', {
                            'class': 'exit-message'
                        }).

                        html('<div>Press ESC to exit</div>').

                        appendTo($('body')).

                        delay(2000).

                        animate({
                            opacity: 0
                        }, 500, function() {

                            $(this).remove();

                        });

                    }

                },

                zoomOut: function() {

                    $('.exit-message').hide();

                    $('.thumbnails').fadeIn();

                    $('.made').fadeIn();

                    $('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');

                    setTimeout(function() {

                        $('.magazine').addClass('animated').removeClass('zoom-in');

                        resizeViewport();

                    }, 0);

                }

            }

        });



        // Zoom event

        if ($.isTouch)

            $('.magazine-viewport').bind('zoom.doubleTap', zoomTo);

        else

            $('.magazine-viewport').bind('zoom.tap', zoomTo);



        // Using arrow keys to turn the page

        $(document).keydown(function(e) {

            var previous = 37,
                next = 39,
                esc = 27;



            switch (e.keyCode) {

                case previous:

                    // left arrow

                    $('.magazine').turn('previous');

                    e.preventDefault();

                    break;



                case next:

                    //right arrow

                    $('.magazine').turn('next');

                    e.preventDefault();

                    break;



                case esc:

                    $('.magazine-viewport').zoom('zoomOut');

                    e.preventDefault();

                    break;

            }

        });

        /*

        	// URIs - Format #/page/1 

        	Hash.on('^page\/([0-9]*)$', {

        		yep: function(path, parts) {

        			var page = parts[1];



        			if (page!==undefined) {

        				if ($('.magazine').turn('is'))

        					$('.magazine').turn('page', page);

        			}



        		},

        		nop: function(path) {



        			if ($('.magazine').turn('is'))

        				$('.magazine').turn('page', 1);

        		}

        	});



        */

        $(window).resize(function() {

            resizeViewport();

        }).bind('orientationchange', function() {

            resizeViewport();

        });



        // Events for thumbnails

        $('.thumbnails').click(function(event) {



            var page;



            if (event.target && (page = /page-([0-9]+)/.exec($(event.target).attr('class')))) {



                $('.magazine').turn('page', page[1]);

            }

        });



        $('.thumbnails li').

        bind($.mouseEvents.over, function() {



            $(this).addClass('thumb-hover');



        }).bind($.mouseEvents.out, function() {



            $(this).removeClass('thumb-hover');



        });



        if ($.isTouch) {



            $('.thumbnails').

            addClass('thumbanils-touch').

            bind($.mouseEvents.move, function(event) {

                event.preventDefault();

            });



        } else {



            $('.thumbnails ul').mouseover(function() {



                $('.thumbnails').addClass('thumbnails-hover');



            }).mousedown(function() {



                return false;



            }).mouseout(function() {



                $('.thumbnails').removeClass('thumbnails-hover');



            });



        }





        // Events for the next button

        $('.next-button').bind($.mouseEvents.over, function() {



            $(this).addClass('next-button-hover');



        }).bind($.mouseEvents.out, function() {



            $(this).removeClass('next-button-hover');



        }).bind($.mouseEvents.down, function() {



            $(this).addClass('next-button-down');



        }).bind($.mouseEvents.up, function() {



            $(this).removeClass('next-button-down');



        }).click(function() {



            $('.magazine').turn('next');



        });



        // Events for the previous button

        $('.previous-button').bind($.mouseEvents.over, function() {



            $(this).addClass('previous-button-hover');



        }).bind($.mouseEvents.out, function() {



            $(this).removeClass('previous-button-hover');



        }).bind($.mouseEvents.down, function() {



            $(this).addClass('previous-button-down');



        }).bind($.mouseEvents.up, function() {



            $(this).removeClass('previous-button-down');



        }).click(function() {



            $('.magazine').turn('previous');



        });





        resizeViewport();



        $('.magazine').addClass('animated');



    }





    // Load the HTML4 version if there's not CSS transform

    yepnope({

        test: Modernizr.csstransforms,

        yep: ['catalog/js/turn.js'],

        nope: ['catalog/js/turn.html4.min.js'],

        both: ['catalog/js/zoom.min.js', 'catalog/js/magazine.js', 'catalog/css/magazine.css'],

        complete: loadApp

    });
    </script>





</body>

</html>
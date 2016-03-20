<!-- full-page overlay of about section toggled by this section/button -->
<section>
    <div class="morph-button morph-button-overlay morph-button-fixed">
        <button class="about-button" type="button"><img class="login-banner" src="/assets/about.png"></button>
        <div class="morph-content">
            <div>
                <div class="content-style-overlay">
                    <span class="icon icon-close">Close the overlay</span>
                    <img src="assets/about2.png">
                    <h3>This is a simple login app built in PHP, HTML, CSS, and Bootstrap.</h3>
                </div>
            </div>
        </div>
    </div><!-- morph-button -->
</section>

<!-- Modernize Script for button pressing -->
<script src="js/classie.js"></script>
<script src="js/uiMorphingButton_fixed.js"></script>
<script>
(function() {   
    var docElem = window.document.documentElement, didScroll, scrollPosition;

                // trick to prevent scrolling when opening/closing button
                function noScrollFn() {
                    window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
                }

                function noScroll() {
                    window.removeEventListener( 'scroll', scrollHandler );
                    window.addEventListener( 'scroll', noScrollFn );
                }

                function scrollFn() {
                    window.addEventListener( 'scroll', scrollHandler );
                }

                function canScroll() {
                    window.removeEventListener( 'scroll', noScrollFn );
                    scrollFn();
                }

                function scrollHandler() {
                    if( !didScroll ) {
                        didScroll = true;
                        setTimeout( function() { scrollPage(); }, 60 );
                    }
                };

                function scrollPage() {
                    scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
                    didScroll = false;
                };

                scrollFn();
                
                var el = document.querySelector( '.morph-button' );
                
                new UIMorphingButton( el, {
                    closeEl : '.icon-close',
                    onBeforeOpen : function() {
                        // don't allow to scroll
                        noScroll();
                    },
                    onAfterOpen : function() {
                        // can scroll again
                        canScroll();
                        // add class "noscroll" to body
                        classie.addClass( document.body, 'noscroll' );
                        // add scroll class to main el
                        classie.addClass( el, 'scroll' );
                    },
                    onBeforeClose : function() {
                        // remove class "noscroll" to body
                        classie.removeClass( document.body, 'noscroll' );
                        // remove scroll class from main el
                        classie.removeClass( el, 'scroll' );
                        // don't allow to scroll
                        noScroll();
                    },
                    onAfterClose : function() {
                        // can scroll again
                        canScroll();
                    }
                } );
})();
</script>

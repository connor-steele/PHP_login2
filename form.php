<section>
    <div class="mockup-content">
        <div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
            <button class="login-button" type="button"><img class="login-banner" src="/assets/login3.png"></button>
            <div class="morph-content">
                <div>
                    <div class="content-style-form content-style-form-1">
                        <span class="icon icon-close">Close the dialog</span>
                        <form method="post" target=''>
                            <img class="brand-name" src="/assets/login3.png"></a>
                            <p>
                                <h5>Username:</h5>  <input type="text" name="username" value="" /><br />
                            </p>
                            <p>
                                <h5>Password:</h5>  <input type="password" name="password" value="" /><br />
                            </p>
                            <div>
                                <input type="submit" value="Submit">
                            </div>
                            <p>Username: connor</p>
                            <p>Password: password</p>
                        </form>
                    </div> <!-- Content-style-form -->
                </div>
            </div> <!-- morph Content -->
        </div><!-- morph-button -->
    </div><!-- /form-mockup -->
</section>
<div class="well">
    <h1>Login to Learn About This Page</h1>
</div>

<!-- Plugin Login Animation Script -->
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

                [].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
                    new UIMorphingButton( bttn, {
                        closeEl : '.icon-close',
                        onBeforeOpen : function() {
                            // don't allow to scroll
                            noScroll();
                        },
                        onAfterOpen : function() {
                            // can scroll again
                            canScroll();
                        },
                        onBeforeClose : function() {
                            // don't allow to scroll
                            noScroll();
                        },
                        onAfterClose : function() {
                            // can scroll again
                            canScroll();
                        }
                    } );
                } );

                // for demo purposes only
                [].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
                    bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
                } );
            })();
            </script>

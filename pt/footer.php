        <footer>
            <div class="copyright">
                <div class="row">© <?php echo date("Y"); ?> Copyright</div>
                <div>Todos os Direitos Reservados</div>
            </div>
            <div>
                <ul class="social">
                    <li><a target="_blank" href="https://www.linkedin.com/in/paulocustodio"><img src="../img/social/linkedin.svg" alt=""></a></li>
                    <li><a target="_blank" href="https://www.behance.net/paulocustodio"><img src="../img/social/behance.svg" alt=""></a></li>
                </ul>
            </div>
        </footer>

        <!--materialize-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

        <!--fluidBox-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js"></script>

        <!--isotope-->
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

        <!--load all the things!!-->
        <script>
            $(window).load(function(){

                // preload
                $('.preloader-background').fadeOut(1500);

                // materialize
                $('.button-collapse').sideNav({
                      menuWidth: 300,
                      closeOnClick: true,
                      edge: 'right'
                    }
                  );
                $('.collapsible').collapsible({});
                $(".dropdown-button").dropdown();

                // fluidbox
                $(function () {
                    $('.lightup').fluidbox({
                        immediateOpen:true,
                        loader: false
                    });
                });
                //// close fluidbox on scroll
                $(window).scroll(function(close) {
                    $('.lightup').fluidbox('close');
                });
                //// close fluidbox on window resize
                $(window).resize(function () {
                    $('.lightup').fluidbox('close');
                });

                // isotope
                var $grid = $('.grid').isotope({
                    itemSelector: '.grid-item',
                    percentPosition: true
                });

                // filter functions
                var filterFns = {
                    // show if number is greater than 50
                    numberGreaterThan50: function() {
                        var number = $(this).find('.number').text();
                        return parseInt( number, 10 ) > 50;
                    },
                    // show if name ends with -ium
                        ium: function() {
                        var name = $(this).find('.name').text();
                        return name.match( /ium$/ );
                    }};

                // bind filter button click
                $('.filters-button-group').on( 'click', 'button', function() {
                    var filterValue = $( this ).attr('data-filter');
                    // use filterFn if matches value
                    filterValue = filterFns[ filterValue ] || filterValue;
                    $grid.isotope({ filter: filterValue });
                });

                // change is-checked class on buttons
                $('.button-group').each( function( i, buttonGroup ) {
                    var $buttonGroup = $( buttonGroup );
                    $buttonGroup.on( 'click', 'button', function() {
                        $buttonGroup.find('.is-checked').removeClass('is-checked');
                        $( this ).addClass('is-checked');
                    });
                });

                // loadonscroll
                // Return the visible amount of px
                // of any element currently in viewport
                ;(function($, win) {
                    $.fn.inViewport = function(cb) {
                        return this.each(function(i,el){
                            function visPx(){
                            var H = $(this).height(),
                                r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
                            return cb.call(el, Math.max(0, t>0? H-t : (b<H?b:H)));
                        } visPx();
                        $(win).on("resize scroll", visPx);
                    });
                  };
                }(jQuery, window));

                // Add Classes on visible scroll
                $(".borderTop").inViewport(function(px){
                    if(px) $(this).addClass("goRight long") ;
                });
                $(".p-loader").inViewport(function(px){
                    if(px) $(this).addClass("p-load") ;
                });
                $("h2").inViewport(function(px){
                    if(px) $(this).addClass("linearWipe") ;
                });
                $(".gridImg").inViewport(function(px){
                    if(px) $(this).addClass("iconSplit medium") ;
                });
                $(".responsive-img").inViewport(function(px){
                    if(px) $(this).addClass("fadeIn xlong") ;
                });
                $(".centerize").inViewport(function(px){
                    if(px) $(this).addClass("spacer xlong") ;
                });
                $(".centerize").inViewport(function(px){
                    if(px) $(this).addClass("spacer xlong") ;
                });
                $(".imgMask").inViewport(function(px){
                    if(px) $(this).addClass("imgWipe") ;
                });
            });
        </script>

        <!--lazysizes-->
        <!-- <script src="../js/lazysizes.min.js?v=5.2.1"></script> -->

        <!--swiper js-->
        <script src="../js/swiper.min.js?v=5.4.2"></script>
        <script src="../js/swiper-initializer.js?v=1.0.0"></script>

        <!--analytics-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-30535064-1', 'auto');
          ga('send', 'pageview');

        </script>

    </body>
</html>

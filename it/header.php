    <header class="" id="home">
        <nav class="navbar navbar-default" data-nav-status="toggle" role="navigation" data-spy="affix" id="myNavbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#" id="logo1"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class=" nav navbar-nav navbar-left">
                        <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#home"
                                class="scroll ">HOME</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#services"
                                class="scroll">SERVIZI</a></li>

                    </ul>
                    <ul class=" nav navbar-nav navbar-right">
                        <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#location"
                                class="scroll">POSIZIONE</a></li>
                        <li class="hidden-sm"><a data-scroll data-options='{ "easing": "easeInOutQuad" }'
                                href="#bike-cjenik" class="scroll">GALERIE</a></li>

                        <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#footer"
                                class="scroll">CONTATTO</a></li>
                        <li id="lang-id">
                            <div class="dropdown language">
                                <button class="btn btn-warning btn-xs dropdown-toggle language" type="button"
                                    data-toggle="dropdown">IT
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="../index.php">HR</a></li>
                                    <li><a href="../en/index.php">EN</a></li>
                                    <li><a href="../de/index.php">DE</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-->
        </nav>
        <!-- bootstrap 3 touch slider with animations -->
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line hidden-xs"
            data-ride="carousel" data-pause="hover" data-interval="false">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner " role="listbox">

                <!-- Third Slide -->

                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img src="../img/hero-1.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                    <div class="bs-slider-overlay "></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX"> <?php echo "$the_sitetitle"; ?> </h1>
                        <p data-animation="animated lightSpeedIn">Esperienza memorabile</p>
                        <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-primary scroll" data-animation="animated fadeInUp">PIÙ <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="#footer" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-default scroll" data-animation="animated fadeInDown">CONTATTO <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="../img/hero-2.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                    <div class="bs-slider-overlay "></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated zoomInLeft"><?php echo "$the_sitetitle"; ?></h1>
                        <p data-animation="animated fadeInRight">Scopri l'Istria</p>
                        <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-primary scroll" data-animation="animated fadeInLeft">PIÙ <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="#footer" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-default scroll" data-animation="animated fadeInRight">CONTATTO <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End of Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="../img/hero-3.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                    <div class="bs-slider-overlay "></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated zoomInLeft"><?php echo "$the_sitetitle"; ?></h1>
                        <p data-animation="animated fadeInRight">Immergiti in un NUOVO MONDO</p>
                        <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-primary scroll" data-animation="animated fadeInLeft">PIÙ <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="#footer" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-default scroll" data-animation="animated fadeInRight">CONTATTO <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
    </header>
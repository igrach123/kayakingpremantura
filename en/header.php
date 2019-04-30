    <header id="home">
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
                                class="scroll">SERVICES</a></li>

                    </ul>
                    <ul class=" nav navbar-nav navbar-right">
                        <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#location"
                                class="scroll">LOCATION</a></li>

                        <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#footer"
                                class="scroll">CONTACT</a></li>
                        <li id="lang-id">
                            <div class="dropdown language">
                                <button class="btn btn-warning btn-xs dropdown-toggle language" type="button"
                                    data-toggle="dropdown">EN
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="../index.php">HR</a></li>
                                    <li><a href="../de/index.php">DE</a></li>
                                    <li><a href="../it/index.php">IT</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-->
        </nav>
        <!-- h1 xs -->
        <h1 class="visible-xs"><?php echo "$the_sitetitle"; ?> <br>
            <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }' class="btn scroll"
                data-animation="animated fadeInUp"> <i class="fa fa-angle-double-down fa-3x" aria-hidden="true"></i></a>
        </h1>

        <!-- h1 xs -->

        <!-- bootstrap 3 touch slider with animations -->
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line hidden-xs"
            data-ride="carousel" data-pause="hover" data-interval="false">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
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
                        <p data-animation="animated lightSpeedIn">Memorable experience</p>
                        <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-primary scroll" data-animation="animated fadeInUp">MORE <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="#footer" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-default scroll" data-animation="animated fadeInDown">CONTACT <i
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
                        <p data-animation="animated fadeInRight">Discover Istria</p>
                        <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-primary scroll" data-animation="animated fadeInLeft">MORE <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="#footer" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                            class="btn btn-default scroll" data-animation="animated fadeInRight">CONTACT <i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End of Slide -->


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
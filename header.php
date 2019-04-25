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
                <a class="logo" href="index.php" id="logo1"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class=" nav navbar-nav navbar-left">
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#home"
                            class="scroll ">POČETNA</a></li>
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#services"
                            class="scroll">IZLETI</a></li>

                </ul>
                <ul class=" nav navbar-nav navbar-right">
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#location"
                            class="scroll">LOKACIJA</a></li>

                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#footer"
                            class="scroll">KONTAKT</a></li>
                    <li id="lang-id">
                        <div class="dropdown language">
                            <button class="btn btn-warning btn-xs dropdown-toggle language" type="button"
                                data-toggle="dropdown">HR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="en/index.php">EN</a></li>
                                <li><a href="de/index.php">DE</a></li>
                                <li><a href="it/index.php">IT</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
    </nav>

    <!-- bootstrap 3 touch slider with animations -->
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="false">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner " role="listbox">

            <!-- Third Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <img src="https://images.pexels.com/photos/48726/pexels-photo-48726.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"
                    alt="Bootstrap Touch Slider" class="slide-image" />
                <div class="bs-slider-overlay"></div>

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left">
                            <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                            <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                            <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default"
                                data-animation="animated fadeInLeft">select one</a>
                            <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary"
                                data-animation="animated fadeInRight">select two</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="https://images.pexels.com/photos/207990/pexels-photo-207990.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"
                    alt="Bootstrap Touch Slider" class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated flipInX">Bootstrap touch slider</h1>
                    <p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default"
                        data-animation="animated fadeInUp">select one</a>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary"
                        data-animation="animated fadeInDown">select two</a>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"
                    alt="Bootstrap Touch Slider" class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_right">
                    <h1 data-animation="animated zoomInLeft"><?php echo "$the_sitetitle"; ?></h1>
                    <p data-animation="animated fadeInRight">Lots of css3 Animations to make slide beautiful .</p>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default"
                        data-animation="animated fadeInLeft">select one</a>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary"
                        data-animation="animated fadeInRight">select two</a>
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
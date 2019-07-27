<header class="main-header header-style-two">
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo-outer">
                    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                </div>

                <!--Info-->
                <div class="info-outer clearfix">
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-call-in"></span></div>
                        <div class="text">
                            <strong>Call Us Today</strong>
                            <span class="info"><a href="#">+91 9246267816</a></span>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-clock"></span></div>
                        <div class="text">
                            <strong>Working Hours</strong>
                            <span class="info">Tue - Sun: 9:00 to 18:00</span>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-home"></span></div>
                        <div class="text">
                            <strong>7-650/1, Subhash Nagar, IDA, Jeedimetla</strong>
                            <span class="info">Hyderabad, India-500055</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <div class="header-lower">
        <div class="auto-container">
            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu-button"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li <?php echo ($curpage=="index" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="index.php">Home</a></li>
                            <li <?php echo ($curpage=="about-us" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="about-us.php">About us</a></li>
                            <li <?php echo ($curpage=="gallery" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="gallery.php">Gallery</a></li>
                            <li <?php echo ($curpage=="team" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="team.php">Team</a></li>
                            <li <?php echo ($curpage=="services" || $curpage=="" ) ? "class='dropdown current'" : "class='dropdown'" ;?>><a href="#">Services</a>
                                <ul>
                                    <li><a href="#">Service 01</a></li>
                                    <li><a href="#">Service 02</a></li>
                                    <li><a href="#">Service 03</a></li>
                                </ul>
                            </li>
                            <li <?php echo ($curpage=="products" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="products.php">Products</a></li>
                            <li <?php echo ($curpage=="contact-us" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!-- Button Box -->
                    <div class="btn-box">
                        <a href="contact.php" class="theme-btn btn-style-one">Get an Estimate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.php" title=""><img src="images/logo-small.png" alt=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li <?php echo ($curpage=="index" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="index.php">Home</a></li>
                            <li <?php echo ($curpage=="about-us" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="about-us.php">About us</a></li>
                            <li <?php echo ($curpage=="gallery" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="gallery.php">Gallery</a></li>
                            <li <?php echo ($curpage=="team" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="team.php">Team</a></li>
                            <li <?php echo ($curpage=="services" || $curpage=="" ) ? "class='dropdown current'" : "class='dropdown'" ;?>><a href="#">Services</a>
                                <ul>
                                    <li><a href="#">Service 01</a></li>
                                    <li><a href="#">Service 02</a></li>
                                    <li><a href="#">Service 03</a></li>
                                </ul>
                            </li>
                            <li <?php echo ($curpage=="products" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="products.php">Products</a></li>
                            <li <?php echo ($curpage=="contact-us" || $curpage=="" ) ? "class='current'" : " " ;?>><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>

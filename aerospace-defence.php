<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bhavani Tooling Systems | Aerospace & Defence</title>
    <!-- Stylesheets -->

    <?php require_once('./includes/styles.php'); ?>

</head>

<body>
    <?php $curpage= basename(__FILE__, '.php');?>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>


        <!-- Start Main Header -->
        <?php require_once('./includes/header.php'); ?>
        <!-- End Main Header -->

        <!--Page Title-->
        <section class="page-banner" style="background-image:url(images/background/3.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Aerospace & Defence</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Product Detail</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side / Our Blog-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-detail">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/news-4.jpg" alt="" />
                                </div>
                                <div class="lower-content">
                                    <div class="content-inner">
                                        <div class="title-box">
                                            <ul class="post-meta">
                                                <li>January 25, 2019 by <strong>Admin</strong></li>
                                                <li><strong>Factory, Power</strong></li>
                                            </ul>
                                            <h2>Aerospace & Defence</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-side col-lg-4 col-md-12 col-sm-12">
                        <!--Sidebar Side-->
                        <div class="sidebar-side">
                            <aside class="sidebar padding-left">
                                <!-- Category Widget -->
                                <?php require_once('includes/products-list.php');?>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="content-side col-lg-12 col-md-12 col-sm-12">
                        <div class="blog-detail">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <div class="content-inner">
                                        <div class="text">
                                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etura dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etura dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                            <h3>Industrial Company Projects</h3>
                                            <p>Aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufas fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident. Sunt in culpa qui officia deserunt mollit anim id est labor Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                                            <div class="gallery-column">
                                                <div class="row clearfix">
                                                    <div class="column col-lg-4 col-md-6 col-sm-12">
                                                        <div class="image">
                                                            <img src="images/resource/news-9.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="column col-lg-4 col-md-6 col-sm-12">
                                                        <div class="image">
                                                            <img src="images/resource/news-10.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="column col-lg-4 col-md-6 col-sm-12">
                                                        <div class="image">
                                                            <img src="images/resource/news-9.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Footer-->
        <?php require_once('./includes/footer.php'); ?>
        <!-- Main Footer End -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Scroll to top-->

    <!-- Adding Scripts -->
    <?php require_once('./includes/scripts.php'); ?>

</body>

</html>

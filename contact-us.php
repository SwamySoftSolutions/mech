<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bhavani Tooling Systems | Contact</title>

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
                    <h1>Contact us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Get In Touch</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Contact Page Section -->
        <section class="contact-page-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
                            <!-- Title Box -->
                            <div class="title-box">
                                <h3>Contact Details</h3>
                                <div class="title-text">Get in touch with us for any questions about our industries or projects.</div>
                            </div>
                            <ul class="contact-info-list">
                                <li><span class="icon icon-location-pin"></span><strong>Office Address</strong>BuildingNo: 7-650/1,Subhash Nagar,IDA,Jeedimetla, Hyderabad-500055</li>
                                <li><span class="icon icon-envelope-open"></span><strong>Email us</strong>bts_engg@yahoo.com</li>
                                <li><span class="icon icon-call-in"></span><strong>Call Support</strong>+91 9246267816</li>
                            </ul>

                            <!-- Social Links -->
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title">We are Bhavani Tooling Systems</div>
                                <h2>Send a Message</h2>
                            </div>

                            <!-- Contact Form -->
                            <div class="contact-form">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="First Name " required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="lastname" placeholder="Last Name " required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email " required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone " required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="company" placeholder="Company " required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="subject" placeholder="Subject " required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message "></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-five" type="submit" name="submit-form">Send Now</button>
                                        </div>

                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Page Section -->

        <!-- Contact Map Section -->
        <section class="contact-map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15223.749203887037!2d78.4487034!3d17.4627148!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e6d1545c274c69e!2sSri+Bhavani+Tooling+Systems!5e0!3m2!1sen!2sin!4v1564263631678!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </section>
        <!-- End Map Section -->

        <!--Newsleter Section-->

        <!--End Newsleter Section-->

        <!--Main Footer-->
        <?php require_once('./includes/footer.php'); ?>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!-- Adding Scripts -->
    <?php require_once('./includes/scripts.php'); ?>

</body>

</html>

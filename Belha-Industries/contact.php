<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>BizTech - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/elements-css/page-title.css" rel="stylesheet">
<link href="assets/css/elements-css/feature.css" rel="stylesheet">
<link href="assets/css/elements-css/contact.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>

<?php
include("include/header.php")
?>

        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact-Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact-Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- feature-style-three -->
        <section class="feature-style-three p_relative centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-31.png);"></div>
            <div class="auto-container">
                <div class="sec-title mb_100">
                    <span class="sub-title">Contact Info</span>
                    <h2>We’d Love To Help You</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-three wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="block-shape" style="background-image: url(assets/images/shape/shape-32.png);"></div>
                                <div class="icon-box"><i class="icon-48"></i></div>
                                <h3>Our Location</h3>
                                <p>1901 Thornridge Cir. Shiloh, <br />Hawaii 81063</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-three wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-49"></i></div>
                                <h3>Email Address</h3>
                                <p><a href="mailto:contact@example.com">contact@example.com</a><br /><a href="mailto:support@example.com">support@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-three wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="block-shape" style="background-image: url(assets/images/shape/shape-33.png);"></div>
                                <div class="icon-box"><i class="icon-50"></i></div>
                                <h3>Phone Number</h3>
                                <p>Emergency Cases <br /><a href="tel:2085550112">+(208) 555-0112</a> (24/7)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-three end -->


        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content-box mr_70">
                            <div class="sec-title mb_35">
                                <span class="sub-title">Message</span>
                                <h2>Feel Free to Contact with us</h2>
                                <p class="mt_20">Lorem ipsum dolor sit amet, consectetur adipiscing elit et aenean orci egestas arcu interdum nisl magna.</p>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="contact.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="https://azim.commonsupport.com/Biztech/sendemail.php" id="contact-form" class="default-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your email" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Type message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn theme-btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner p_relative d_block">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section end -->
        <?php
include("include/footer.php")
?>
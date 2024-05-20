<?php
   include("include/header.php")
   ?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark text-light" style="background-image: url(assets/img/banner/Contact-us.jpg);">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Contact Us</h2>
            </div>
            <div class="col-lg-6 text-right">
                <!-- <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Contact</li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact 
    ============================================= -->
<div class="contact-area overflow-hidden default-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 contact-form-box">
                <div class="content">
                    <div class="heading">
                        <h2>Need Help?</h2>
                        <p>Reach out to the world’s most reliable <br />Digital Visiting Card services.</p>
                    </div>
                    <form action="https://validthemes.net/site-template/techa/assets/mail/contact.php" method="POST"
                        class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Please describe what you need."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Get a free consultation
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 info">
                <div class="contact-tabs">
                    <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                Address
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#tab2" data-toggle="tab" class="nav-link">
                                Google Maps
                            </a>
                        </li>
                    </ul>
                    <div id="tabsContent" class="tab-content">
                        <div id="tab1" class="tab-pane fade active show">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Our Location
                                            <span>Office No - 401/402, 3rd Floor, Tirupati Tower, Vapi, Gujarat
                                                396195</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Send Us Mail
                                            <span>info@cloud9softech.com</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Call Us
                                            <span>+91 9428218430</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.403407916342!2d72.91788687459986!3d20.366250381122395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ae916bb312fe3a1%3A0x4a0cc9850c657c!2sCloud9%20Softech%20-%20Website%20Development%20%26%20Mobile%20App%20Development%20Company%20in%20Vapi%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sin!4v1708669064022!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Contact Area -->

<?php
   include("include/footer.php")
   ?>
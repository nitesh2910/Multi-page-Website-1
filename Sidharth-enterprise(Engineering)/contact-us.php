<?php
include("include/header.php")
?>
<!-- Page Title Start -->
<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2 class="text-uppercase text-white mrb-10">Contact Us</h2>
                <ul class="mb-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                    <li class="breadcrumb-item text-primary-color">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->
<!-- Contact Section Start -->

<section class="contact-section pdt-100 pdb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-form mrb-md-40">
                    <h2 class="mrb-40 f-weight-400 solid-bottom-line">Send<span class="f-weight-700 text-primary-color">
                            Message</span></h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mrb-25">
                                    <input type="text" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mrb-25">
                                    <input type="text" placeholder="Phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mrb-25">
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mrb-25">
                                    <textarea rows="4" placeholder="Messages" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <button type="submit" class="cs-btn-one btn-md btn-round btn-primary-color">Submit
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="mrb-40 f-weight-400 solid-bottom-line">Our<span class="f-weight-700 text-primary-color">
                        Address</span></h2>
                <div class="contact-block d-flex mrb-30">
                    <div class="contact-icon">
                        <i class="webex-icon-map1"></i>
                    </div>
                    <div class="contact-details mrl-30">
                        <h5 class="icon-box-title mrb-10">Our Address</h5>
                        <p class="mrb-0">Office no.03, 3rd floor Devhira Complex,Tel.Ex.Road,GIDC Char Rasta,Vapi-396195
                        </p>
                    </div>
                </div>
                <div class="contact-block d-flex mrb-30">
                    <div class="contact-icon">
                        <i class="webex-icon-Phone2"></i>
                    </div>
                    <div class="contact-details mrl-30">
                        <h5 class="icon-box-title mrb-10">Phone Number</h5>
                        <p class="mrb-0"> +91 9712930036</p>
                    </div>
                </div>
                <div class="contact-block d-flex">
                    <div class="contact-icon">
                        <i class="webex-icon-envelope"></i>
                    </div>
                    <div class="contact-details mrl-30">
                        <h5 class="icon-box-title mrb-10">Email Us</h5>
                        <p class="mrb-0">sales@siddharthenterprise.co.in</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <!-- Google Map Start -->
                <div class="mapouter fixed-height">
                    <div class="gmap_canvas">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.403407916342!2d72.91788687459986!3d20.366250381122395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ae916bb312fe3a1%3A0x4a0cc9850c657c!2sCloud9%20Softech%20-%20Website%20Development%20%26%20Mobile%20App%20Development%20Company%20in%20Vapi%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sin!4v1709109829543!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->
<!-- Call to Action Start -->
<section class="call-to-action">
    <div class="container">
        <div class="cta-bg bg-primary-color">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="contact-info">
                        <div class="cta-contact-icon">
                            <i class="webexflaticon webex-flaticon-call"></i>
                        </div>
                        <div class="cta-contact-content">
                            <div class="cta-contact-text">Call Us Now</div>
                            <div class="cta-contact-number"> +91 9712930036</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="newsletter-form mrt-md-40">
                        <form method="post">
                            <div class="form-group clearfix">
                                <input type="email" name="email" value="" placeholder="Email address" required="">
                                <button type="submit" class="newsletter-btn"><span
                                        class="icon fa fa-paper-plane"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action End -->
<?php
include("include/footer.php")
?>
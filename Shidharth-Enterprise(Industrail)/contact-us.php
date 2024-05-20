<?php
       include("include/header.php")
       ?>

<!-- <div class="search-input" id="search-input-box">
    <div class="search-inner-box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form role="search" id="search-form"
                        class="search-form d-flex justify-content-between search-inner">
                        <label>
                            <input type="search" class="search-field" placeholder="Search Here" value="" name="s" />
                        </label>
                        <button type="submit" class="search-submit">
                            <i class="las la-search"></i>
                        </button>
                        <span class="las la-times close-search" id="close-search" title="Close Search"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!--header end-->


<!--hero section start-->

<section class="page-title" data-bg-img="images/bg/05.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="theme-breadcrumb-box">
                    <h1>Contact Us</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="las la-home me-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

    <!--contact start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-6 mb-lg-0 contact-info">
                    <div>
                        <div class="map mb-6">
                            <iframe class="w-100 h-100 border-0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921"
                                allowfullscreen=""></iframe>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Our Address</h5>
                                <p>423B, Road Wordwide Country, USA</p>
                                <p>423B, Road Wordwide Country, USA</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Emails</h5>
                                <p>
                                    <a href="mailto:themeht23@gmail.com">themeht23@gmail.com</a>
                                </p>
                                <p>
                                    <a href="mailto:themeht23@gmail.com">infocompany@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Phone Number</h5>
                                <p>
                                    <a href="tel:+912345678900">+91-234-567-8900</a>
                                </p>
                                <p>
                                    <a href="tel:+912345678900">+91-234-567-8900</a>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5>Follow Us</h5>
                                <ul class="list-inline p-0 m-0 social-icons social-colored">
                                    <li class="social-facebook">
                                        <a href="#">
                                            <i class="la la-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-twitter">
                                        <a href="#">
                                            <i class="la la-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-instagram">
                                        <a href="#">
                                            <i class="la la-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="social-linkedin">
                                        <a href="#">
                                            <i class="la la-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="social-dribbble">
                                        <a href="#">
                                            <i class="la la-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 ps-lg-10">
                    <div class="dark-bg p-7" data-bg-img="images/pattern-1.png">
                        <div class="theme-title">
                            <h6>Contact Us</h6>
                            <h2>Happy To Answer Your Questions</h2>
                        </div>
                        <form id="contact-form" method="post"
                            action="https://themeht.com/template/pentair/html/php/contact.php">
                            <div class="messages"></div>
                            <div class="form-group mb-4">
                                <input id="form_name" type="text" name="name" placeholder="First Name"
                                    required="required" data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group mb-4">
                                <input id="form_email" type="email" name="email" placeholder="Email" required="required"
                                    data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group mb-4">
                                <input id="form_phone" type="tel" name="phone" placeholder="Phone" required="required"
                                    data-error="Phone is required">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea id="form_message" name="message" class="h-auto" placeholder="Message" rows="4"
                                    required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col mt-5">
                                <button class="primary-btn">
                                    <span>Send Messages</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact end-->

</div>

<!--body content end-->


<?php
       include("include/footer.php")
       ?>
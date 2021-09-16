<?php 
    include 'includes/header.php';
?>

<style>
    .navbar{
        background: #4e54c8 !important;
    }
</style>

<body>

    <!-- =====================================
        ==== Start Loading -->

    <div class="loading">
        <div class="load-circle">
        </div>
    </div>

    <!-- End Loading ====
        ======================================= -->


    <!-- =====================================
        ==== Start Navbar -->

    
    <?php 
        include 'includes/nav.php';
    ?>


    <!-- =====================================
        ==== Start Contact -->

    <section id="contact" class="page-contact section-padding" data-scroll-index="6">
        <div class="container">
            <div class="section-head text-center col-sm-12">
                <h4>Contact us</h4>
                <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tel ullamcorper mattis.</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="item row">
                        <span class="icon col-2 col-sm-2"><i class="fas fa-map-marker-alt"></i></span>
                        <div class="content col-10 col-sm-10">
                            <h3>Our Location</h3>
                            <p>2659 King Autostrad Street, Toronto, ON L6H 6X5 Canada</p>
                        </div>
                    </div>

                    <div class="item row">
                        <span class="icon col-2 col-sm-2"><i class="fas fa-mobile-alt"></i></span>
                        <div class="content col-10 col-sm-10">
                            <h3>Let's Talk</h3>
                            <p>Phone : +12 3 1462 2249, 2248</p>
                            <p>Fax : +12 9 1462 2238, 2248</p>
                        </div>
                    </div>

                    <div class="item row">
                        <span class="icon col-2 col-sm-2"><i class="far fa-envelope"></i></span>
                        <div class="content col-10 col-sm-10">
                            <h3>E-mail Us</h3>
                            <p>Support : info@company.com</p>
                            <p>Sales : info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="form" id="contact-form" method="post" action="contact.php">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="far fa-user"></i>
                                        <input id="form_name" type="text" name="name" placeholder="your Name..." required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="fas fa-mobile-alt"></i>
                                        <input id="form_email" type="text" name="phone" placeholder="Cell phone..." required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input id="form_subject" type="email" name="email" placeholder="Email Adress...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="far fa-comment-dots"></i>
                                        <input id="form_subject" type="text" name="subject" placeholder="Subject...">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <i class="far fa-comment"></i>
                                        <textarea id="form_message" name="message" placeholder="Your Message" rows="4" required="required" data-error="Your message is required."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>

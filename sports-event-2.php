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

    <!-- End Navbar ====
        ======================================= -->


    <!-- =====================================
        ==== Start Header -->


    <!-- End Header ====
        ======================================= -->


    <!-- =====================================
        ==== Start About -->
    <section id="about" class="about" data-scroll-index="1" style="margin-top:70px;">
        <div class="container">
            <div class="row">
               

                <div class="col-lg-6">
                    <div class="info section-padding">
                        <h5>Sports Event</h5>
                        <h2>Event Name</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper luctus nec ullamcorper mattis, pulvinar dapibus leo. ullamcorper mattis, pulvinar dapibus leo. ullamcorper mattis, pulvinar dapibus
                            leo.</p>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i>
                                <p>Business consulting services dolor sit amet, consectetur.</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Social media marketing Agency dolor sit amet, consectetur.</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Purchase strategy plans dolor sit amet, consectetur sodic.</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Design plans for dolor sit amet, consectetur adipisicing elit.</p>
                            </li>
                        </ul>

                        <a href="#register-now" class="butn">
                                <span>Register Now!</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/about/hero-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About ====
        ======================================= -->



    <!-- =====================================
        ==== Start services -->
   
    <!-- End services ====
        ======================================= -->



    <!-- =====================================
        ==== Start Works -->


    <!-- End Works ====
        ======================================= -->




    <!-- =====================================
        ==== Start Teams -->

    
    <!-- End Teams ====
        ======================================= -->


    <!-- =====================================
        ==== Start video -->
   

    <!-- End video ====
        ======================================= -->



    <!-- =====================================
        ==== Start Testimonials-Grid -->


    <!-- End Testimonials-Grid ====
        ======================================= -->


    <!-- =====================================
        ==== Start Blog -->


    <!-- End Blog ====
        ======================================= -->



    <!-- start sponsor ====
        ======================================= -->
   


    <!-- =====================================
        ==== end sponsor -->



    <!-- =====================================
        ==== Start Contact -->

    <div id="register-now">
        <section id="contact" class="page-contact section-padding" data-scroll-index="6">
            <div class="container">
                <div class="section-head text-center col-sm-12">
                    <h4>Register Now!</h4>
                    <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tel ullamcorper mattis.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="item row">
                            <span class="icon col-2 col-sm-2"><i class="fas fa-rupee-sign"></i></span>
                            <div class="content col-10 col-sm-10">
                                <h3>Registration Charges</h3>
                                <br>
                                <p>INR. 100</p>
                            </div>
                        </div>

                        <div class="item row">
                            <span class="icon col-2 col-sm-2"><i class="fas fa-gift"></i></span>
                            <div class="content col-10 col-sm-10">
                                <h3>Price</h3>
                                <br>
                                <p>INR. 1000</p>
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
                                            <select>
                                                <option value="sports2">Sports 2
                                            </option>
                                            </select>
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
                                        <button type="submit" class="butn butn-bg"><span>Register</span></button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php 
    include 'includes/footer.php';
?>

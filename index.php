<?php 
    include 'includes/header.php';
?>

<style>

    #team .row{
        width:100%;
    }
    .team-img{
        background:transparent !important;
    }
    .team-img img{
        width:auto;
    }
    #team .info{
        max-width:300px;
        margin: 0 auto;
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

    <header class="header slider-fade slider-style-1" data-scroll-index="0">
        <div class="owl-carousel owl-theme">
            <div class="item bg-img" data-overlay-dark="7" data-background="img/slider/slide-01.png">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="o-hidden mw-800 text-center">

                                <div style="max-width:300px;margin: 10px auto;">
                                    <img src="img/cesa.png" style="width:100%;">
                                </div>
                                    <h3 class="text-center">Computer Engineering Students' Association 2021</h3>
                                    <p class="slider-text">Cooperation , Support, Innovation and Determination are the backbone of our organization.</p>
                                    <a href="#events" class="butn butn-bord-trans mt-50" style="width:300px;">
                                            <span>Check out our Events</span>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- End Header ====
        ======================================= -->


    <!-- =====================================
        ==== Start About -->
    <section id="about" class="about" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/about/hero-2.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info section-padding">
                        <h5>CESA 2k21</h5>
                        <h2>Why Participate in our Events</h2>
                        <p>Don’t you think you should also have fun while learning at college? Gone are those days when college life was only about academics and students focused on attending lectures and writing exams. CESA 2k21 brings to you 6 amazing events and prizes worth Rs.5,000+</p>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i>
                                <p>Win Amazing Prizes.</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Showcase your Skills.</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Get to know your Strengths.</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About ====
        ======================================= -->



    <!-- =====================================
        ==== Start services -->
        <div id="events">
    <section id="services" class="services text-center bg-gray section-padding" data-scroll-index="2">
        <div class="container">
            <div class="section-head">
                <h4>Our Events</h4>
                <p>This year participate in 6 different events and win exciting prizes!</p>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-12 col-xs-12 ">
                    <div class="box-icon-left items">
                        <span class="icon"><i class="fa fa fa-paint-brush"></i></span>
                        <div class="cont">
                            <h5 class="mb-10">Gandharva</h5>
                            <p class="pb-10">Events designed for entertainment and enjoyment.</p>
                            <a href="cultural.php" class="box-icon-btn"><span>VIEW EVENTS</span></a>
                        </div>
                    </div>
                </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="box-icon-left items">
                            <span class="icon"><i class="fas fa-laptop-code"></i></span>
                            <div class="cont">
                                <h5 class="mb-10">Avishkar</h5>
                                <p class="pb-10">Test your technical skills in these breathtaking events! </p>
                                <a href="technical.php" class="box-icon-btn"><span>VIEW EVENTS</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="box-icon-left items">
                            <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
                            <div class="cont">
                                <h5 class="mb-10">Sangharsha</h5>
                                <p class="pb-10">Are you good enough to beat them all?</p>
                                <a href="sports.php" class="box-icon-btn"><span>VIEW EVENTS</span></a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
</div>
    <!-- End services ====
        ======================================= -->



    <!-- =====================================
        ==== Start Works -->


    <!-- End Works ====
        ======================================= -->




    <!-- =====================================
        ==== Start Teams -->

    <section id="team" class="team section-padding" data-scroll-index="4">
        <div class="container">
            <div class="row" style="margin-left:0;margin-right:0;" >

                <div class="section-head text-center col-sm-12" >
                    <h4>Meet Our Team!</h4>
                    <p>Thanks to our amazing team for arranging CESA 2k21!</p>
                </div>




                </div>

                <div class="about" style="margin: 0 auto;">
                    <div class="info text-center">

                        <a href="team.php" class="butn">
                            <span>VIEW ALL MEMBERS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Teams ====
        ======================================= -->


    <!-- =====================================
        ==== Start video -->
    <section class="video section-padding valign">
        <div class="overlay"></div>
        <div class="container text-center">
            <!-- content info -->
            <div class="info">
                <h5>CESA 2k21</h5>
                <h3>Check out our video on YouTube!</h3>
                <a href="#"><i class="far fa-play-circle"></i></a>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z"></path>
                    <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z"></path>
                    <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z"></path>
                    <path class="elementor-shape-fill" d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z"></path>
                </svg>
    </section>

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




    <!-- =====================================
        ==== end sponsor -->



    <!-- =====================================
        ==== Start Contact -->


<?php 
    include 'includes/footer.php';
?>

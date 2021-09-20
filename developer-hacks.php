<?php 
    include 'includes/header.php';
?>

<style>

    .navbar{
        background: #4e54c8 !important;
    }



    .about .img img{
        left:0;
        max-width:100%;
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
    <section id="about" class="about" data-scroll-index="1" style="margin-top:130px;">
        <div class="container">
            <div class="row">
               

                <div class="col-lg-6">
                    <div class="info section-padding">
                        <h5>Technical Event</h5>
                        <h2>Developer Hacks</h2>
                        <p>Developer Hacks - 21 aims to uplift the three primary sectors of the Indian economy with the
efficient use of technology. Students can bring up innovative solutions which can help tackle
the problems faced in the respective domains. These are the three major themes of
Developer Hacks - 21.</p>
                        <ul class="info-list">
                        <li><i class="fas fa-check"></i>
                                <p>DATE: 16th Sept. to 28 Sept. 2021</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>1st Winner: Rs 2000 </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>2nd Winner: Rs 1500</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>3rd Winner: Rs 1000</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Contact: gdsc.aissmsioit@gmail.com</p>
                            </li>
                        </ul>

                        <a href="rulebooks/RuleBook_DeveloperHacks-21.pdf" target=_blank class="butn">
                                <span>Rule Book</span>
                            </a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMAJK9N_RyIhLbS7sN_7yhkUZQUweNGromoDrxzqbhHH-yYg/viewform?usp=sf_link" target=_blank class="butn">
                                <span>Register Now!</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/technical/1.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>

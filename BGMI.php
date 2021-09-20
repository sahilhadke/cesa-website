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
                        <h5>Sports Event</h5>
                        <h2>BGMI</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i>
                                <p>DATE: 24/09/2021</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>TIME: 2:00 PM</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Solo Winner: Rs 200 </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Squad Winner: Rs 500</p>
                            </li>
                        </ul>

                        <a href="rulebooks/BGMI_Rulebook_CESA_2021.pdf" target=_blank class="butn">
                                <span>Rule Book</span>
                            </a>
                            <br>
                            <a href="https://forms.gle/YwXd2aQ2KvCtoUjFA" target=_blank class="butn">
                                <span>Register Now! (Squad)</span>
                            </a> <br>
                            <a href="https://forms.gle/aywPDyq3rJzuP3CV6" target=_blank class="butn">
                                <span>Register Now! (Solo)</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/sports/BGMI.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>

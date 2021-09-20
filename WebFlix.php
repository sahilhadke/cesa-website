<?php 
    include 'includes/header.php';
?>

<style>

    .navbar{
        background: #4e54c8 !important;
    }


    .about .img img{
        left:0;
        width:100%;
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
                        <h5>Cultural Event</h5>
                        <h2>WebFlix</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i>
                                <p>DATE: 23/09/2021</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>TIME: 1:00 PM</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>1st Winner: Rs 300 </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>2nd Winner: Rs 100</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>No Entry Fee!!</p>
                            </li>
                        </ul>

                        <a href="rulebooks/Webfilx Rule Book.pdf" target=_blank class="butn">
                                <span>Rule Book</span>
                            </a>
                            <a href="https://forms.gle/oUyFJ8rat6nzQ9SN6" target=_blank class="butn">
                                <span>Register Now!</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/cultural/Webflix.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>

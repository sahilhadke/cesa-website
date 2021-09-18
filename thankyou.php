<?php 
    include 'includes/header.php';
?>

<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4e54c8;
  color: white;
}

    .navbar{
        background: #4e54c8 !important;
    }

    .flex-team{
        width:100%;
    }
    .flex-team .item{
        margin: 10px
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




    <section id="team" class="team section-padding" data-scroll-index="4" style="min-height:100vh;position:relative;">
        <div class="container" style="    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">



<div class="section-head text-center col-sm-12">
                    <h4>Thank You for Registering!</h4>
                    <p>An email has been sent you blah blah blah</p>
                    <p>In case of any queries, please contact <a href="#" style="color:#4e55c8">someone</a>
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
                <h5>KEEP WORKING ON AWESOME AND UNIQUE IDEAS.</h5>
                <h3>We are always with you to make your perfect project</h3>
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



<?php 
    include 'includes/footer.php';
?>

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




    <section id="team" class="team section-padding" data-scroll-index="4">
        <div class="container">



<div class="section-head text-center col-sm-12">
                    <h4>CESA Core Team</h4>
                    <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tel ullamcorper mattis.</p>
                </div>

        <div style="overflow-x:auto">
        <table id="customers">
  <tr>
    <th>Post</th>
    <th>Name</th>
    <th>Class</th>
    <th>Contact No.</th>
    <th>Email</th>
  </tr>
  <tr>
    <td>President</td>
    <td>Akshada Bhandari</td>
    <td>BE 1</td>
    <td>9359788097</td>
    <td>akshada3654@gmail.com</td>
  </tr>
  <tr>
    <td>President</td>
    <td>Akshada Bhandari</td>
    <td>BE 1</td>
    <td>9359788097</td>
    <td>akshada3654@gmail.com</td>
  </tr>
 
</table>
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

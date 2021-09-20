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
  color:#666;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}


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
                    <h4>CESA 2k21 Core Team</h4>
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
                          <td>Vice President</td>
                          <td>Digvijay Jagtap</td>
                          <td>BE 2</td>
                          <td>9075331819</td>
                          <td>digvi8818@gmail.com</td>
                        </tr>

                  
                  <tr>
                    <td rowspan=2>Secretary</td>
                    <td>Nikita Aher</td>
                    <td>BE 2</td>
                    <td>7083178560</td>
                    <td>nikita.aaher@gmail.com</td>
                  </tr>
                  <tr>
                    <td>Pratik Zimbre</td>
                    <td>BE 1</td>
                    <td>8806041397</td>
                    <td>zimbrepratik@gmail.com</td>
                  </tr>


                  <tr>
                        <td rowspan=2>Treasurer
                    </td>
                        <td>Nikhil Bhale</td>
                        <td>BE 1</td>
                        <td>9404322970</td>
                        <td>nikhilbhale2000@gmail.com </td>
                      </tr>
                      <tr>
                        <td>Ruthik Kale</td>
                        <td>BE 2</td>
                        <td>9623447492</td>
                        <td>ruthikkale27@gmail.com</td>
                      </tr>


                      <tr>
                        <td rowspan=2>Administrator

                    </td>
                        <td>Premraj Pawade</td>
                        <td>BE 1</td>
                        <td>7030591513</td>
                        <td>premrajpawade619@gmail.com</td>
                  </tr>
                  <tr>
                    <td>Parth Desai</td>
                    <td>TE 1</td>
                    <td>9923342020</td>
                    <td>parthraj1001@gmail.com</td>
                  </tr>


                  <tr>
                    <td rowspan=3>Technical Secretary</td>
                    <td>Prarthana Chandak</td>
                    <td>TE 1</td>
                    <td>9325442426</td>
                    <td>prarthanachandak@gmail.com </td>
                  </tr>
                  <tr>
                    <td>Sameer Sawarkar</td>
                    <td>BE 1</td>
                    <td>9168418348</td>
                    <td>smrsawarkar1@gmail.com</td>
                  </tr>
                  <tr>
                    <td>Sahil Hadke</td>
                    <td>BE 2</td>
                    <td>7875178805</td>
                    <td>sahil.hadke@gmail.com</td>
                  </tr>

                  <tr>
                    <td rowspan=3>Technical Head

                      </td>
                          <td>Onasvee Banarse</td>
                          <td>TE 1</td>
                          <td>8975905090</td>
                          <td>2obanarse@gmail.com</td>
                        </tr>
                        <tr>
                          <td>Shruti Metha</td>
                          <td>TE 1</td>
                          <td>9420049109</td>
                          <td>shrutimetha1301@gmail.com</td>
                        </tr>
                        <tr>
                          <td>Chetan Agarwal</td>
                          <td>TE 2</td>
                          <td>9834710110</td>
                          <td>chetansmittal@gmail.com</td>
                        </tr>

                        <tr>
                      <td colspan="1" rowspan="3">
                      Cultural Secretary</td>
                      <td>Shruti Surve</td>
                      <td>TE 2</td>
                      <td>8830744642</td>
                      <td>shrutisurve2892000@gmail.com</td>
                      </tr>
                      <tr>
                      <td>Shreyas Honrao</td>
                      <td>TE 2</td>
                      <td>9175696272</td>
                      <td>shreyashonrao22@gmail.com</td>
                      </tr>
                      <tr>
                      <td>Sanjana Pol</td>
                      <td>BE 1</td>
                      <td>9172974547</td>
                      <td>polsanjana4547@gmail.com</td>
                      </tr>


                        <tr>
                        <td colspan="1" rowspan="2">
                        Cultural Head</td>
                        <td>Pournima Kamble</td>
                        <td>TE1</td>
                        <td>7620998151</td>
                        <td>pournima2413@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Shivam Doshi</td>
                        <td>TE 2</td>
                        <td>7757087983</td>
                        <td>doshishivam12@gmail.com</td>
                        </tr>

                        <tr>
                        <td colspan="1" rowspan="3">
                        Sports Secretary</td>
                        <td>Anjali Bharambe</td>
                        <td>BE 1</td>
                        <td>9146276347</td>
                        <td>anjalibharambe246@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Rishikesh Nagale</td>
                        <td>TE 1</td>
                        <td>9112886325</td>
                        <td>rishipn0624@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Apurva Kate</td>
                        <td>TE 2</td>
                        <td>9373068138</td>
                        <td>apukate007@gmail.com</td>
                        </tr>
                        <tr>
                        <td colspan="1" rowspan="3">
                        TnP Secretary</td>
                        <td>Rohit Divekar</td>
                        <td>TE 1</td>
                        <td>9834015006</td>
                        <td>rohitdivekar463@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Hrithik Kucheria</td>
                        <td>BE2</td>
                        <td>8788681243</td>
                        <td>kucheriahrithik@gmail.comcom</td>
                        </tr>
                        <tr>
                        <td>Ankita Bhati</td>
                        <td>BE1</td>
                        <td>9767900662</td>
                        <td>ankita28042000@gmail.com</td>
                        </tr>
                        <tr>
                        <td colspan="1" rowspan="3">
                        Documentation</td>
                        <td>Rajeshree Kalburgi</td>
                        <td>BE 1</td>
                        <td>7887822122</td>
                        <td>rajeshreekalburgi03@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Ninad Shirsat</td>
                        <td>TE 2</td>
                        <td>7622018384</td>
                        <td>nsninad21@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Himaja Namala</td>
                        <td>BE 1</td>
                        <td>8378855476</td>
                        <td>himaja2209@gmail.com</td>
                        </tr>
                        <tr>
                        <td colspan="1" rowspan="2">
                        Media Secretary</td>
                        <td>Bhargavi Mahashabde</td>
                        <td>TE 1</td>
                        <td>8446816395</td>
                        <td>bhargavi1217m@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Harshal Nikam</td>
                        <td>BE 2</td>
                        <td>7448003889</td>
                        <td>harshalnikam60@gmail.com</td>
                        </tr>
                        <tr>
                        <td >
                        Media Head</td>
                        <td>Kedar Mane</td>
                        <td>SE 1</td>
                        <td>7756952445</td>
                        <td>kedarpmane2002@gmail.com</td>
                        </tr>
                        <tr>
                        <td colspan="1" rowspan="3">
                        Executive Member</td>
                        <td>Sakshi Shirsathe</td>
                        <td>SE 1</td>
                        <td>7020397442</td>
                        <td>shirsathesakshi@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Siddhi Kothavale</td>
                        <td>SE 2</td>
                        <td>7020096625</td>
                        <td>kothavalesiddhi9@gmail.com</td>
                        </tr>
                        <tr>
                        <td>Diksha Natekar</td>
                        <td>SE 1</td>
                        <td>8087410471</td>
                        <td>dikshanatekar307@gmail.com</td>
                        </tr>

              
            
            </table>
          </div>

        </div>
    
    </section>

    <!-- End Teams ====
        ======================================= -->


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

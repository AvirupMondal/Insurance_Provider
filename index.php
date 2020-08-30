        <!----------------------------- Including Header ------------------------------>
<?php
    require('include/header.php');
?>
        <!----------------------------- Main Site Section Start------------------------------>

    <main>

        <!------------------------ Slider Section Start ---------------------->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="media/SLIDER4.jpg" alt="First slide">
            </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="media/SLIDER1-01.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="media/SLIDER2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="media/SLLIDER3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!------------x----------- Slider Section Ends ----------x----------->

        <!-- --------------------- Insurance Carousel Starts ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                            <?php
                                $sqli="Select * from insurance_types order by Insurance_Id asc";
                                $res=mysqli_query($con,$sqli); 
                                while($row=mysqli_fetch_assoc($res))
                                { ?>
                                    <div class="blog-content" data-aos="fade-right" data-aos-delay="100">
                                    <img src="<?php echo 'media/'.$row['Insurance_Image'] ?>" alt="<?php echo $row['Insurance_Name'] ; ?>">
                                    <div class="blog-title">
                                        <h3><?php echo $row['Insurance_Detail'] ?></h3>
                                        <a style="color: black; font-weight: 400;" class="btn btn-blog" href='policy.php?name= <?php echo $row['Insurance_Name'] ; ?>'><?php echo $row['Insurance_Name'] ; ?></a>
                                    </div>
                                    </div>
                            <?php } ?>
                                    <div class="owl-navigation">
                                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </div>
                    </div>
                </div>
            </div>
        </section>
 <!-- --------------------- Insurance Carousel Ends----------------- -->
        
        <!-- ----------x---------- About Agent start --------x-------- -->
     <section class="agent">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <h1 style="color:black">MYSELF</h1><br>
            <div class="row">
                <div>
                    <img class="img-responsive" src="media/Add%2020.jpg" style="opacity:100%; width: auto; height:auto;">
                </div>
            </div>
        </div>
    </section>
        <!-- ----------x---------- About Agent ends --------x-------- -->
        
        
        <!-- ---------------------- Customer Feedback starts -------------------------->
     
    <section class="site-title1" id="feedback">
          <div class="container">
              
               
            <div class="row">
                <div class="table-responsive">
                    <div class="service">
                    <h1>Customer Feedbacks</h1><br>
                </div>
                 
                              <table class="table ">
                                 <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Customer Name</th>
                                        <th>Feedback</th>
                                        <th>Rating</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                        $sqli="Select * from feedback where Status='1' order by Date asc";
                                        $res=mysqli_query($con,$sqli);
                                        while($row=mysqli_fetch_assoc($res)){?>
                                            <tr>
                                                <td><img style=" width: 70px;height: 70px;overflow: hidden;border-radius: 50%;" src="<?php echo 'media/feedback/'.$row['User_Image'] ?>" alt="<?php echo $row['User_Name'] ; ?>"></td>
                                                <td><h3><?php echo $row['User_Name'] ?></h3></td>
                                                <td><p><?php echo $row['Feedback'] ?></p></td>
                                                <td><h4><?php echo $row['Rating']." Out of 5" ?></h4></td>
                                            </tr>
                                     <?php } ?>
                                 </tbody>
                                </table>
                </div>
            </div>
        </div>
        </section>
       
        <!-- ---------------------- Customer Feedback end-------------------------->
    </main>

    <!---------------x------------- Main Site Section Ennds---------------x-------------->

<!-- JS, Popper.js, and jQuery -->


<!-- ----------------------Footer Include -------------------------->
   <?php  
require('include/footer.php');
?>
</body>
</html>
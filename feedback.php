<?php
    require('include/header.php');


if(isset($_POST['submit']))
 {
    $name=get_safe_data($con,$_POST['name']);
     $feedback=get_safe_data($con,$_POST['message']);
     $rating=get_safe_data($con,$_POST['rating']);
    $date= date('Y-m-d h:i:s');
            $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'media/feedback/'.$image);

            $insert_sql="Insert into feedback(User_Name,User_Image,Feedback,Rating,Date) values('$name','$image','$feedback','$rating','$date')";
            mysqli_query($con,$insert_sql);?>
<div style="background-color:wheat; height:100px; text-align:center; padding-top:30px">
<?php
    echo "<strong style='font-size:35px; color:black;'>Your Feedback is been Recorded. Visit our <a href='index.php#feedback' style='cursor: pointer;font-size:30px; color:grey;'>Home Page</a> to see it. <b>Thank You</b></strong>";
         
}
?></div>
<section class="htc__contact__area ptb--100 bg__white " >
            <div class="container feedback">
                    <div class="row">
                        <div class="contact-form-wrap " style="overflow-x:scroll;">
                            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
                                <div class="contact-title">
                                    <h1 class="title__line--6" style="text-align:center; background-color:wheat;" >Give A Feedback</h1>
                                </div>
                            </div>
                            
                            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="rating-box">
                                            <h4>Your Name:</h4> 
                                            <div class="contact-box1 ">
                                               <input type="text" name="name" id="name" >
                                            </div>
                                        </div>
                                       <div class="rating-box">
                                           <h4>User Image:</h4>s
                                
                                <input type="file" id="image" name="image" class="form-control"  style="height:60px;">
                            </div>
                                        <div class="rating-box">
                                            <h4>Your Review:</h4> 
                                            <div class="contact-box1 message">
                                               <textarea name="message" id="message" ></textarea>
                                            </div>
                                        </div>

                                         <div class="rating-box">
                                            <h4>Rate Your Experience</h4> <h5> Out of 5</h5>
                                              <div class="ratings">
                                                 <span class="fa fa-star-o"></span>
                                                 <span class="fa fa-star-o"></span>
                                                 <span class="fa fa-star-o"></span>
                                                 <span class="fa fa-star-o"></span>
                                                 <span class="fa fa-star-o"></span>
                                              </div>
                                              <input type="text" name="rating" id="rating_value">
                                         </div>



                                        <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                                   <span id="payment-button-amount">Submit</span>
                                   </button>
                                         <script src="js/script.js"></script>  
                                    </form>
                                    <div class="form-output">
                                        <p class="form-messege"></p>
                                    </div>
                        </div>
                        
                       
    </div>
</div>
    </div>
</section>
   <?php
    require('include/footer.php');
?>
</body>

</html>
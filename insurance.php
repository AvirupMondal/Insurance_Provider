<?php
    require('include/header.php');
 $sqli="Select * from insurance_types order by Insurance_Id asc";
   $res=mysqli_query($con,$sqli);

?>

<div class="container" style="margin-bottom:50px;">
   
<div class="service">
    <h1 class="ser1">MY SERVICES</h1>
    <h3 class="ser1"><i><b>DIFFERENT TYPES OF GENERAL INSURANCE</b></i></h3>
    </div>
    <div class="row">
         <?php while($row=mysqli_fetch_assoc($res)){
                                   
                                     ?>
    <div class="col-lg-4 col-md-4 ">
        <div id="messagedisplay"></div>
        <div class="service-box">
            <img src="<?php echo 'media/'.$row['Insurance_Image'] ?>" alt="<?php echo $row['Insurance_Name'] ; ?>">
        <h2><?php echo $row['Insurance_Name'] ?></h2>
            <p><?php echo $row['Insurance_Detail'] ?></p>
          <a class="btn btn-blog" style="font-size:20px;  
    color: black; font-weight: 400;" href='policy.php?name= <?php echo $row['Insurance_Name'] ; ?>'>Plans</a>
        </div>
        </div>
        <?php }
?>
    </div>
        
</div>

 <?php
    require('include/footer.php');
?>
</body>

</html>

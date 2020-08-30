<?php
    require('include/header.php');
$sql="Select *from blog Where Status='1' order by Blog_Id asc";
  $res=mysqli_query($con,$sql);
?>
<div class="container">

    <div class="row">
    <?php while($row=mysqli_fetch_assoc($res)){
                                   
                                     ?>
        <div class="col-lg-6">
        <img class="img-responsive" src="media/blog/<?php echo $row['Blog_Image']?>">
        </div>
        <div class="col-lg-6">
            <h1><?php echo $row['Blog_Name']?></h1>
            <p><?php echo $row['Blog']?></p>
            <h3 style="background-color:wheat; font-size: 20px;">Written By: <?php echo $row['Written_By']?></h3>
            <h5 style="background-color:white; font-size: 15px;">Added On: <?php echo $row['Date']?></h5>
        </div>
        <?php }?>
    </div>
</div>


<?php
    require('include/footer.php');
?>
</body>
</html>
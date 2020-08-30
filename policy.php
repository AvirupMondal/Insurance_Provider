<?php
    require('include/header.php');
if(isset($_GET['name']) && $_GET['name']!=''){
    $Name=get_safe_data($con,$_GET['name']);
    $sqli="Select * from policy where Name_Insurance='$Name' and Status='1'";
   $res=mysqli_query($con,$sqli);
    $check=mysqli_num_rows($res);
}
?>

<div class="container">

    <div class="row">
        
        <div class="table-responsive">
            <div class="service">
    <h1>DIFFERENT POLICIES</h1>
    </div>
                    <?php  if($check >0){ ?>
                              <table class="table table-bordered" style=" border: 1px solid black; ">
                                  
                                 <thead>
                                    <tr>
                                       
                                       
                                        <th>Insurance Name</th>
                                       <th>Policy Name</th>
                                        <th>Policy Description</th>
                                        <th>Claim Forms</th>
                                        <th>Policy Rules</th>
                                       <th>Download Forms</th>
                                    </tr>
                                 </thead>

                                 <tbody>
                                    
                                     <?php 
                                     
                                     while($row=mysqli_fetch_assoc($res)){
                                 						
                                     ?>
                                    <tr>
                                       
                                        <td><?php echo $row['Name_Insurance'] ?></td>
                                       <td><?php echo $row['Policy_Name'] ?></td>
                                       <td><a href='<?php echo 'media/policy_details/'.$row['Policy_Details'] ?>' target="_blank">CLICK TO VIEW DETAILS</a></td>
                                        <td><a href="<?php echo 'media/claimforms/'.$row['Claim_Forms'] ?>" target="_blank">Click To View Claim Forms</a></td>
                                      
                                        <td><a href="<?php echo 'media/rules/'.$row['Rules'] ?>" target="_blank">Click To View Rules</a></td>
                                      
                                        <td><a href="<?php echo 'media/forms/'.$row['Forms'] ?>" target="_blank">Download Form</a></td>
                                      
                                    </tr>
                                     <?php } ?>
                                 </tbody>

                              </table>
                          <?php }
                                     else
                                     {
                                         echo "There is no plan to show. Come back soon.";
                                     }?>
                       
        </div>
        
    </div>
</div>


 <?php
    require('include/footer.php');
?>
</body>

</html>
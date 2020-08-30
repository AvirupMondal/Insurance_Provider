<?php
    require('include/header.php');
 
$msg='';


 if(isset($_POST['submit']))
 {
     $name=get_safe_data($con,$_POST['name']);
     $email=get_safe_data($con,$_POST['email']);
     $address=get_safe_data($con,$_POST['address']);
      $contact=get_safe_data($con,$_POST['contact']);
      $insurance=get_safe_data($con,$_POST['insurance']);
      $policy=get_safe_data($con,$_POST['policy']);
      $age=get_safe_data($con,$_POST['age']);
     
  
            $addressproof=rand(111111111,999999999).'_'.$_FILES['addressproof']['name'];
            move_uploaded_file($_FILES['addressproof']['tmp_name'],'./media/user_document/'.$addressproof);
     
      $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'./media/user_document/'.$image);
     
      $ageproof=rand(111111111,999999999).'_'.$_FILES['ageproof']['name'];
            move_uploaded_file($_FILES['ageproof']['tmp_name'],'./media/user_document/'.$ageproof);
     
      $pancard=rand(111111111,999999999).'_'.$_FILES['pan']['name'];
            move_uploaded_file($_FILES['pan']['tmp_name'],'./media/user_document/'.$pancard);
     
      $form=rand(111111111,999999999).'_'.$_FILES['formpdf']['name'];
            move_uploaded_file($_FILES['formpdf']['tmp_name'],'./media/user_document/'.$form);
     
            $insert_sql="Insert into user_document(User_Name,User_Email,User_Contact,User_Address,User_Age,User_Image,User_Pancard,User_Form, Address_Proof, Age_Proof,Policy_Name,Insurance_Name) values('$name','$email','$contact','$address','$age','$image','$pancard','$form','$addressproof','$ageproof','$policy','$insurance')";
            mysqli_query($con,$insert_sql);
           echo "<h1>Thank you for your submission Our Agent will Contact you soon</h1>";
        
    
       
 }
?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row"  style="background-image:url('media/document.jpg'); background-size:cover;">
                  <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-12">
                     <div class="card col-md-12" style="color:white;">
                        <div class="card-header" style="text-align:center; padding:20px; color:black;"><strong><h2>UPLOAD YOUR DOCUMENTS</h2></strong></div>
                          <form class="" method="post" enctype="multipart/form-data">
                        <div class="card-body card-block" style="font-size:20px;">
                            
                            
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">User Name:</label>
                                
                                <input type="text" id="company" name="name" class="form-control"  required>
                            </div>
                            
                           <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="vat" class=" form-control-label" style="color:black;">User Email:</label>
                             
                               <input type="email" id="vat" name="email" class="form-control"  required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">User Contact:</label>
                                
                                <input type="text" id="company" name="contact" class="form-control" required >
                            </div>
                            
                             <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">User Address:</label>
                                
                                <input type="text" id="company" name="address" class="form-control" required >
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">User Age:</label>
                                
                                <input type="text" id="company" name="age" class="form-control" required >
                            </div>
                            
                            
                             <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">User Image:</label>
                                
                                <input type="file" id="company" name="image" class="form-control" required >
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">Address Proof:</label>
                                
                                <input type="file" id="company" name="addressproof" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">Age Proof:</label>
                                
                                <input type="file" id="company" name="ageproof" class="form-control"  required>
                            </div>
                             
                             <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">User Pancard:</label>
                                
                                <input type="file" id="company" name="pan" class="form-control"  required>
                            </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">User Form:</label>
                                
                                <input type="file" id="company" name="formpdf" class="form-control" required >
                            </div>
                             
                             
                            
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">Insurance Name:</label>
                                
                                <select type="text" id="company" name="insurance"  class="form-control" required><option>Select Insurance</option>
                                    <?php 
                                    $sqli="Select Insurance_Name from insurance_types order by Insurance_Name asc";
                                        $res=mysqli_query($con,$sqli);
                                    while($row=mysqli_fetch_assoc($res)){
                                    
                                            echo "<option >".$row['Insurance_Name']."</option>"; }?>
                                    
                                  

                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                               <label for="category" class=" form-control-label" style="color:black;">Policy Name:</label>
                                
                                <select type="text" id="company" name="policy"  class="form-control" required><option>Select Policy</option>
                                    <?php 
                                    $sqli="Select Policy_Name from policy order by Policy_Name asc";
                                        $res=mysqli_query($con,$sqli);
                                    while($row=mysqli_fetch_assoc($res)){
                                    
                                            echo "<option >".$row['Policy_Name']."</option>"; }?>
                                    
                                  

                                </select>
                            </div>
                            
                            
                            
                           <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-primary" style="text-align:center;" >
                           <span id="payment-button-amount">Submit</span>
                           </button>
                              </div>
                               </form>
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
 <?php
    require('include/footer.php');
?>
</body>

</html>
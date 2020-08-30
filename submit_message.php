<?php 
require('include/db_connection.php');
require('include/function.php');
$name= get_safe_data($con,$_POST['name']);

$email= get_safe_data($con,$_POST['email']);

$mobile= get_safe_data($con,$_POST['mobile']);

$comment= get_safe_data($con,$_POST['message']);

$date= date('Y-m-d h:i:s');
 $sqli="Insert into contact_us(User_Name,User_Email,User_Mobile,User_Message,Date) values('$name','$email','$mobile','$comment','$date')";
   $res=mysqli_query($con,$sqli);
echo "You Query has been recorded. Our Expert Team will Contact you soon."
?>
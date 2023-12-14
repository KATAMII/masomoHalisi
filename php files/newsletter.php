<?php
include_once 'db.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    if(!empty($email)) { 
      $sql="INSERT INTO newsletter(email)
      VALUES('$email')";

if (mysqli_query($conn, $sql)) {
  
   header('Location: http://localhost/college%20website/html files/contact.html?msg=success');
   
   exit;
 } else {
   header('Location: http://localhost/college%20website/html files/error.html?msg=' . urlencode(mysqli_error($conn)));
   exit;
 }
 
    }
}
?>

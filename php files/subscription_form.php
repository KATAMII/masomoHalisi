<?php
include_once 'db.php';
if(isset($_POST['submit']))
{
   $name = $_POST['name'];
   $email= $_POST['email'];
   $phone= $_POST['phone'];
   if(!empty($name)) {
   $sql="INSERT INTO users (name,email,phone)
VALUES('$name','$email','$phone')";

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

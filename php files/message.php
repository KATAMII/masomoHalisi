<?php
include_once 'db.php';
if(isset($_POST['submit']))
{
   $name = $_POST['name'];
   $email= $_POST['email'];
   $subject= $_POST['subject'];
   $message= $_POST['message'];
   if(!empty($name)) {
   $sql="INSERT INTO message (name,email,subject,content)
VALUES('$name','$email','$subject','$message')";

if (mysqli_query($conn, $sql)) {
   // Successfully inserted a new record
   // Redirect to the contact page with a success message
   header('Location: http://localhost/college%20website/html files/contact.html?msg=success');
   // Stop further execution of the script
   exit;
 } else {
   // Failed to insert a new record
   // Redirect to the error page with an error message
   header('Location: http://localhost/college%20website/html files/error.html?msg=' . urlencode(mysqli_error($conn)));
   // Stop further execution of the script
   exit;
 }
   } 
}
?>
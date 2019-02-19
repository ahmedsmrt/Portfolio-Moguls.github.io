<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "iamag@sabrthruit.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Email From Site", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://portfoliomoguls.net/success.html');
  }
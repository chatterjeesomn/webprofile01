<?php

  if(isset($_POST['submit'])) {
    $name = "";
    $error = "";
    $email = "";
    $message = "";

    if($_POST['name'] == ""){
      $error = "Fill your Name <br>";
    } else {
      $name = $_POST['name'];
    }

    if($_POST['email'] == ""){
      $error .=  "Enter Your Email <br>";
    } else {
      $email = $_POST['email'];
    }

    if($_POST['message'] ==""){
      $error .= " Enter Your message <br>";
    } else {
      $message = $_POST['message'];
    }

    if($error == ""){
      $headers = "From: '$email'";
      mail("somnathchatterjee260104@gmail.com", "Mail from Resume", $message, $headers);
      echo "<h1>Mail Sent </h1>";
    } else {
      echo  "<h1>" . $error . "</h1>";
    }

  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1><a href="index.html">Go back</a></h1>
  </body>
</html>
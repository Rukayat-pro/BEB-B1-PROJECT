<?php
include('conn.php');

session_start();

$name           = $_POST['firstname']. ' ' .$_POST['lastname'];
$email          = $_POST['email'];
$issue          = $_POST['issue'];
$comment      = $_POST['comment'];

$sql            =  "INSERT INTO `responses` (`name`, `email`, `issue`, `comment`) VALUES ('$name', '$email', '$issue', '$comment')";

if (mysqli_query($conn, $sql)) {
  $_SESSION['name']     =   $name;
  $_SESSION['email']    =   $email;
  $_SESSION['issue']    =   $issue;
  $_SESSION['comment']  =   $comment;
  
  echo "OK";
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

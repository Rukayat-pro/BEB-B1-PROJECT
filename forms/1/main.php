<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  <title>Thank You</title>
  <style>
    body{
      font-family: 'Roboto';
    }
    img {
      margin: 0 auto;
      display: block;
      margin-top: 10%;
    }
    h1{
      text-align: center;
      font-size: 24px;
      margin-top: 65px;
    }
    p{
      margin-bottom: 0;
      margin-top: 0;
    }
    
  </style>
</head>
<body>
  <a href="https://codevixens.org"><img src="https://codevixens.org/assets/images/Logo-1.png"
      alt="Codevixens Academy Logo"></a>
  <h1 style="text-align:center;">Complaint Received!</h1>
  <div style="text-align:center;">



  <p><strong>Name:</strong>
    <span><?php print_r($_SESSION['name'])?></span>
    
  </p>
  <p><strong>Email:</strong>
    <span><?php print_r($_SESSION['email'])?></span>
    
  </p>
  <p><strong>Issue:</strong>
    <span><?php print_r($_SESSION['issue'])?></span>
    
  </p>
  <p><strong>Comment:</strong>
    <span><?php print_r($_SESSION['comment'])?></span>
    
  </p>
  </div>
</body>
</html>




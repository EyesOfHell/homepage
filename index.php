<?php

  $con= mysqli_connect('localhost','root');

  if(!$con){
    echo "connecton is failed";
  }
  else{
    mysqli_select_db($con, 'booking');
    $username = $_POST['username'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $destination= $_POST['destination'];
    $sql="INSERT INTO ticket ( `username`, `age`, `gender`, `email`, `phone`, `destination`, `dt`) VALUES 
    ( '$username', '$age', '$gender', '$email', '$phone','$destination', current_timestamp());";
    
   $successmsg= mysqli_query($con,$sql); 
   if($successmsg==true){
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="success.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@500&display=swap" rel="stylesheet">
  <title>Register Form</title>
</head>
<body>
    <div class="success">
      <h1>Registration Successful!!</h1>
      <p><a href="#">Click here to Login Now</a></p>
    </div>
    
</body>
</html>
   }
  }
  
  


?>


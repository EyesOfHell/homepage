<?php

  $con= mysqli_connect('localhost','root');

  if($con){
    echo "connection is successfull";
  }
  else{
    echo "connecton is failed";
  }
  
  mysqli_select_db($con, 'booking');
  $username = $_POST['username'];
  $age= $_POST['age'];
  $gender= $_POST['gender'];
  $email= $_POST['email'];
  $phone = $_POST['phone'];
  $destination= $_POST['destination'];
  $sql="INSERT INTO ticket ( `username`, `age`, `gender`, `email`, `phone`, `destination`, `dt`) VALUES 
  ( '$username', '$age', '$gender', '$email', '$phone','$destination', current_timestamp());";
  
  mysqli_query($con,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="train">
    <div class="container">
    <h1>Welcome To The Booking Page</h1>
    <p class="submitmsg">Your Form Has Been Submited </p>
    

    <form action="index.php" method="post">
        <input type="text" name="fullname" id="fullname" placeholder="Enter Your Full Name">
        <input type="text" name="age" id="age" placeholder="Enter Your Age">
        <select name="gender" id="gender">
            <option  disabled selected>Select Your Gender:</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
          </select>
          <input type="text" name="email" id="email" placeholder="Enter Your Email Address">
          <input type="text" name="phoneno." id="phoneno." placeholder="Enter Your Phone No."> 
          <select name="destination" id="destination">
            <option  disabled selected>Select Your Journey:</option>
            <option value="delhi">Mumbai-Delhi</option>
            <option value="bangalore">Mumbai-Bangalore</option>
            <option value="gandhinagar">Mumbai-Gandhinagar</option>
            <option value="lucknow">Mumbai-Lucknow</option>
          </select>
          <button class="btn">Confirm Ticket</button>
    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
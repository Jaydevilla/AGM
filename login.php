<?php
session_start();


$servername = "192.168.254.128";
$username = "User";
$password = "Pass1234";
$DB = "all_good_machinery";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login_container">
    <img src="image/red_car.png" alt="red car" class="main_image">
    <h1 class="Main_heading">All Good Machinery</h1>

    <div class="button">
        
        <form method="POST" action="items.php"> <input type="submit" value="View Items"/></form><br><br>

        <form method="POST" action="customer.php"> <input type="submit" value="Customer login"/></form><br><br>

        <form method="POST" action="administrator.php"> <input type="submit" value="Administrator Login"/></form><br><br>
    </div>



</div>

</body>
</html>
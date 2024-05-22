<?php
session_start();
 
// Check if session variables exist and display them
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
</head>
<style>
    .form{
        text-align: center;
    }

</style>
<body>

<div class="form">

<h2>Thank you for signing up</h2>
<p><?php echo htmlspecialchars($name); ?></p>
<button type="submit" class="btn">Login</button><br><br>

</div>

</body>
</html>
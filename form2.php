<?php
session_start();
include('db_connection.php');

if(isset($_POST['admin_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        header('Location: admin_dashboard.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrator Login</title>
</head>
<body>
    <h2>Administrator Login</h2>
    <?php if(isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="admin_login" value="Login">
    </form>
</body>
</html>

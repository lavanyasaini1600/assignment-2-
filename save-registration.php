<?php
// 1. Get the form inputs
$usernm = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$ok = true;

// 2. Validate the inputs: required + matching passwords
if (empty($usernm)) {
    echo 'Username is required<br />';
    $ok = false;
}

if (empty($password)) {
    echo 'Password is required<br />';
    $ok = false;
}

if ($password != $confirm) {
    echo 'Passwords do not match';
    $ok = false;
}

if ($ok) {
    // 3. connect
    require_once 'connection.php';

    // 3a. check if username already exists
    $sql = "SELECT * FROM users WHERE user_name = '".$usernm."'";
    $user = mysqli_num_rows($sql);


    
    if (!empty($user)) {
        echo 'Username already exists';
        exit(); // this stops execution of any more PHP code on this page
    }

    // 4. set up SQL INSERT to users table
    $sql = "INSERT INTO users (user_name, pass_word) VALUES ('".$usernm."','". $_POST['password']."')";
    $query = mysqli_query($conn, $sql);

    header('location:login.php');
}

?>

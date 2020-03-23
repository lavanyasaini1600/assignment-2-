<?php
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'connection.php';

$sql = "SELECT * FROM users WHERE user_name = '".$username."' and pass_word='".$password."'";
$query = mysqli_query($conn, $sql);
$data = mysqli_num_rows($query);

if (empty($data)) {
    echo 'Invalid Login';
    exit();
}
else {
    $user = mysqli_fetch_assoc($query);
    // handle valid login
    session_start(); // access the current session.  required before reading/write session variables
    $_SESSION['userId'] = $user['id']; // store the user's id from our query in a new session variable
    header('location:persons-list.php'); // redirect to musician list page
}

$db = null;

?>


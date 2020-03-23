<?php
include_once ('connection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$emailid = $_POST['emailid'];
$cno = $_POST['cno'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];


$sql = "INSERT INTO person_form 

(first_name, last_name, email_id, contact_no, add_ress, city, state, country)

VALUES ('$fname', '$lname', '$emailid', '$cno', '$address', '$city', '$state', '$country')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
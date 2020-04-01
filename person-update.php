<?php
include_once ('connection.php');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailid = $_POST['emailid'];
    $cno = $_POST['cno'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
  session_start();
    $personid= $_SESSION['userId'];

    $sql = "UPDATE person_form set first_name='".$fname."', last_name='".$lname."', email_id='".$emailid."', contact_no='".$cno."', add_ress='".$address."',city='".$city."',state='".$state."',country='".$country."'  where id=".$personid;

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header('location:persons-list.php'); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>
<?php
include_once ('connection.php');
if(isset($_REQUEST['id'])) {
    $sql = "DELETE from person_form where id=".$_REQUEST['id'];

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
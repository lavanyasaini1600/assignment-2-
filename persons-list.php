<?php
include_once ('connection.php');
include_once ('header.php');

$sql = "SELECT * FROM person_form";
$result = mysqli_query($conn, $sql);

?>
<head>
    <meta charset="UTF-8">
    <title>Customer Details</title>
</head>
<body>
    <h3>Customers</h3>
    <table border="1">
<tr>
<th>Name</th>
<th>E-mailId</th>
<th>ContactNo</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Actions</th>
</tr>
<?php
    $selectedIndex = -1;
   
    while($person = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td style="text-transform: capitalize">'.$person['first_name']. ' '. $person['last_name'].'</td>';
        echo '<td>'.$person['email_id'].'</td>';
        echo '<td>'.$person['contact_no'].'</td>';
        echo '<td>'.$person['add_ress'].'</td>';
        echo '<td>'.$person['city'].'</td>';
        echo '<td>'.$person['state'].'</td>';
        echo '<td>'.$person['country'].'</td>';
        if(isset($_SESSION['userId'])) {
            echo '<td><a href="/person-edit.php/?id='.$person['id'].'">Edit</a> &nbsp;&nbsp; <a href="/person-delete.php/?id='.$person['id'].'" onclick="return confirm(\'Are you sure you want to delete this item?\');">Delete</a></td>';
        } else {
            echo '<td>&nbsp;</td>';
        }
        
        echo '</tr>';
    }
?>
    </table>
</body>
<?php
include_once ('footer.php');
?>

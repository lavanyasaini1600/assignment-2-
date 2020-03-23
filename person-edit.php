<?php
include_once ('connection.php');
include_once ('header.php');
    if(isset($_REQUEST['id'])) {
        echo $_REQUEST['id'];
        $personid= $_REQUEST['id'];

        $sql = "SELECT * FROM person_form where id='".$personid."'";
        $result = mysqli_query($conn, $sql);
        $person = mysqli_fetch_assoc($result);
    
        $vfname= $person['first_name'];
        $vlname= $person['last_name'];
        $vemailid= $person['email_id'];
        $vcno= $person['contact_no'];
        $vaddress= $person['add_ress'];
        $vcity= $person['city'];
        $vstate= $person['state'];
        $vcountry= $person['country'];    
    } else {
        header('location:/');
    }
?>
<head>
    <meta charset="UTF-8">
    <title>Edit Customer Form</title>
</head>
<body>
    <h3>Edit Customer Form</h3>
    <form action="/person-update.php" method="post">
        <fieldset>
            First Name: <input type="text" name="fname" value="<?=$person['first_name'];?>">
        </fieldset>
        <fieldset>
            Last Name:  <input type="text" name="lname" value="<?=$person['last_name'];?>">
        </fieldset>
        <fieldset>
            E-mail id: <input type="email" name="emailid" value="<?=$person['email_id'];?>">
        </fieldset>
        <fieldset>
            Contact No: <input type="text" name="cno" value="<?=$person['contact_no'];?>">
        </fieldset>
        <fieldset>
            Address: <input type="text" name="address" value="<?=$person['add_ress'];?>">
        </fieldset>
        <fieldset>
            City: <input type="text" name="city" value="<?=$person['city'];?>">
        </fieldset>
        <fieldset>
            State: <input type="text" name="state" value="<?=$person['state'];?>">
        </fieldset>
        <fieldset>
            Country: <input type="text" name="country" value="<?=$person['country'];?>">
        </fieldset>
        <fieldset>
            <input type="submit" value="update">
        </fieldset>
    </form>
</body>
<?php
include_once ('footer.php');
?>

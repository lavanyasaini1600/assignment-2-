<?php
include_once ('connection.php');
include_once ('header.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Customer Form</title>
</head>
<body>
    <h3>Customer Form</h3>
    <form action="person-save.php" method="post">
        <fieldset>
            First Name: <input type="text" name="fname" value="">
        </fieldset>
        <fieldset>
            Last Name:  <input type="text" name="lname" value="">
        </fieldset>
        <fieldset>
            E-mail id: <input type="email" name="emailid" value="">
        </fieldset>
        <fieldset>
            Contact No: <input type="text" name="cno" value="">
        </fieldset>
        <fieldset>
            Address: <input type="text" name="address" value="">
        </fieldset>
        <fieldset>
            City: <input type="text" name="city" value="">
        </fieldset>
        <fieldset>
            State: <input type="text" name="state" value="">
        </fieldset>
        <fieldset>
            Country: <input type="text" name="country" value="">
        </fieldset>
        <fieldset>
            <input type="submit" value="save">
        </fieldset>
    </form>
</body>
<?php
include_once ('footer.php');
?>

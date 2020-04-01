<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-navy navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Customer Form</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/persons-list.php">View All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/person-create.php">Add New</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                
                <?php
                    if(isset($_SESSION['userId'])) {
                        echo '<a class="nav-link" href="/logout.php">Logout</a>';
                    } else {
                        echo '<a class="nav-link" href="/login.php">Log In</a>';
                    }
                ?>
            </li>
        </ul>
    </div>
</nav>


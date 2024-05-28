<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        if (isset($_SESSION['valid'])) {
            echo "WELCOME ".$_SESSION['username'];
            echo "<div class='header-container'>".
                "<a href='logout.php'>Log out</a>".
                "</div";
        }else{
            echo "<div class='header-container'>".
                "<a href='login.php'>Log in</a>".
                "<a href='register.php'>Sign up</a>".
                "</div>"; 
        }
        ?>

        <div class="search-container">
            <div class="search">
                <input type="text" class="search-input" placeholder="Search">
                <img src="images/Vectorsearch-icon.png" alt="search icon">
            </div>
        </div>

        <div class="navBar">
            <ul>
                <li><a href="">Restaurants</a></li>
                <li><a href="">Boarding Houses</a></li>
                <li><a href="">General Stores</a></li>
            </ul>
        </div>

        <?php
        if (isset($_SESSION['valid'])) {
            echo "<div class='header-container'>".
                "<a href='addLocation.php'>Add Location</a>".
                "</div";
        }
        ?>

        <div class="information-container"></div>
    </body>
</html>
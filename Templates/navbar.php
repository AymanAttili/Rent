<?php
include("database.php");
?>
<!-- need session handling -->


<!--side menu -->
<nav class="mynavbar">
    <div id="slide" class="erase" onclick="popup(-300)"></div>
    <div class="menu_popup">
        <div class="topMenu">
            <img class="logo" src="./SVG/Logo2.svg" onclick="window.open('./Index.php','_self')">
            <img class="close" onclick="popup(-300)" src='./SVG/X.svg'>
        </div>
        <ul class="menuList">
            <li onclick="window.open('./Index.php','_self')">Home</li>
            <li onclick="window.open('./Search.php','_self')">Search</li>
            <hr>
            <section class="">
                <li>Saved properties <small>0</small></li>
                <li>History</li>
                <li onclick="window.open('./personal-details.php','_self')">Settings</li>
                <hr>
            </section>
            <section class="">
                <li onclick="window.open('./myRealty.php','_self')">My realty</li>
                <hr>
            </section>

            <?php
            // Check if the user is logged in
            $loggedIn = true; // Replace with info from session

            if ($loggedIn) {
                // User is logged in, display username and photo
                $username = "Ayman Attili"; // Replace with info from query
                $profile_image_path = "./img/HD-wallpaper-lelouch-vi-britannia-anime-code-geass.jpg"; // Replace with info from query

                echo '<section class="">';
                echo '<img src="' . $profile_image_path . '" class="profile_picture">';
                echo '<li onclick="window.open(\'./personal-details.php\', \'_self\')">' . $username . '</li>';
                echo '<hr>';
                echo '</section>';
            } else {
                // User is not logged in, display login/sign up buttons
                echo '<section>';
                echo '<li onclick="window.open(\'./Login.php\',\'_self\')">Login</li>';
                echo '<li onclick="window.open(\'./Signup.php\',\'_self\')">Sign up</li>';
                echo '</section>';
            }
            ?>

            <section class="">
                <hr>
                <li class="">Log out</li>
            </section>
        </ul>
    </div>



    <!-- navbar -->
    <div class="container">
        <div class="left">
            <img src="./SVG/menu1.svg" class="menu" onclick="popup(0)">
            <img class="logo" src="./SVG/Logo.svg">
        </div>
        <div class="right">
            <img src="./SVG/on_heart.svg" class="heart" title="Saved Properties" onclick="window.open('../saved.php')">

            <?php
            if ($loggedIn) {
                // User is logged in, display user's name and photo
                echo '<div class="namebar" onclick="window.open(\'./personal-details.php\', \'_self\')">';
                echo '<img src="' . $profile_image_path . '" class="profile_picture">';
                echo '<p class="name">' . $username . '</p>';
                echo '</div>';
            } else {
                // User is not logged in, display login/sign up buttons
                echo '<p class="signup_button" onclick="window.open(\'./Signup.php\',\'_self\')">Sign up</p>';
                echo '<p class="login_button" onclick="window.open(\'./Login.php\',\'_self\')">Log in</p>';
            }
            ?>

        </div>
    </div>
</nav>

<script src="./JS/navbar.js"></script>
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
            

            <?php
            // Check if the user is logged in
            $loggedIn = true; // Replace with info from session

            if ($loggedIn) {
                // User is logged in, display username and photo
                $username = "Ayman Attili"; // Replace with info from query
                $profile_image_path = "./img/profile.jpg"; // Replace with info from query

                echo '<hr>';
                echo '<section class="">';
                echo '<li>Saved properties <small>0</small></li>';
                echo '<li>History</li>';
                echo '<li onclick="window.open(\'./personal-details.php\',\'_self\')">Settings</li>';
                echo '<hr>';
                echo '</section>';
                echo '<section class="">';
                echo '<li onclick="window.open(\'./myRealty.php\',\'_self\')">My realty</li>';
                echo '</section>';
                
                echo '<section>';
                echo '<hr>';
                echo '<li class="">Log out</li>';
                echo '</section>';
            } else {
                echo '<hr>';
                // User is not logged in, display login/sign up buttons
                echo '<section>';
                echo '<li onclick="window.open(\'./Login.php\',\'_self\')">Login</li>';
                echo '<li onclick="window.open(\'./Signup.php\',\'_self\')">Sign up</li>';
                echo '</section>';
            }
            ?>
        </ul>
    </div>



    <!-- navbar -->
    <div class="container">
        <div class="left">
            <img src="./SVG/menu1.svg" class="menu" onclick="popup(0)">
            <img class="logo" src="./SVG/Logo.svg" onclick="window.open('./Index.php','_self')">
        </div>
        <div class="right">
            
            <?php
            if ($loggedIn) {
                // User is logged in, display user's name, heart and photo
                echo '<img src="./SVG/on_heart.svg" class="heart" title="Saved Properties" onclick="window.open(\'../saved.php\')">';
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
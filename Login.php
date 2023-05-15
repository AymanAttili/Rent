<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Main template CSS file-->
    <link rel="stylesheet" href="./CSS/myStyle.css" />

    <!--    Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>ٌRentalMate | Login</title>

</head>

<body>
    
    <!-- Start Header -->
    <header class="header">
        <div class="container">
            <img src="./SVG/back.svg" class="back" onclick="window.open('/index.php','_self')" alt="">
            <p class="logo">RentalMate<span>/Login</span></p>
            <img src="./SVG/back.svg" alt="" style="visibility: hidden;">
        </div>
    </header>
    <!-- end Header -->


    <!-- start sign_screen -->
    <div class="sign_screen">
        <div class="container">
        
            <form class="sign_form" action="">

                <h1>Login</h1>

                <fieldset class="sign_field">
                    <legend class="sign_legend" >Email address\Username</legend>
                    <input class="sign_input" type="text">

                </fieldset>

                <fieldset class="sign_field">
                    <legend class="sign_legend" >Password</legend>
                    <input class="sign_password" type="password" onfocus="visEye(eye1)">
                    <img class="eye" id="eye1" src="./SVG/ic_baseline-remove-red-eye.svg" onclick="changeVis()">
                </fieldset>


                <a href="./img/15939048_605.jpg">Forgot password...?</a>

                <button type="button">Login</button> 
            </form>

            <div class="others">
    
                <p>Dont have an account? <a href="./Signup.php">Sign Up</a> <br><br><br>
                    or continue with:
                </p>  
                <img src="./SVG/ic_baseline-apple.svg">
                <img src="./SVG/ant-design_facebook-filled.svg">
                <img src="./SVG/akar-icons_google-contained-fill.svg">
            </div>


    </div>
    <!-- end sign_screen -->

    <div class="hid" style="visibility: hidden; height: 40px;">
        HHHHHHHHHHHHHHHHHH
    </div>

    <footer class="footer">
        &copy; 2023 <span>RentalMate</span> All Right Reserved
    </footer>
    

    <script src="./JS/myJS.js"></script>
    
</body>
</html>
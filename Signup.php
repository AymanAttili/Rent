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
    <title>ٌRentalMate | Signup</title>

</head>

<body>
    
    <!-- start header -->
    <header class="header">
        <div class="container">
            <img src="./SVG/back.svg" class="back" onclick="window.open('/index.php','_self')">
            <p class="logo">RentalMate<span>/Sign up</span></p>
            <img src="./SVG/back.svg" alt="" style="visibility: hidden;">
        </div>
    </header>
    <!-- end header -->


    <!-- start sign_screen -->
    <div class="sign_screen">
        <div class="container">
        
            <form class="sign_form" action="">

                <h1>Create an account</h1>

                <fieldset class="sign_field">
                    <legend class="sign_legend" >Email address</legend>
                    <input class="sign_input" type="email">
                </fieldset>

                <div class="name">
                    <fieldset class="sign_field">
                        <legend class="sign_legend" >First name</legend>
                        <input class="sign_input" type="text">
                    </fieldset>

                <fieldset class="sign_field">
                    <legend class="sign_legend" >Last name</legend>
                    <input class="sign_input" type="text">
                </fieldset>
                </div>

                <fieldset class="sign_field">
                    <legend class="sign_legend" >Username</legend>
                    <input class="sign_input" type="text">
                </fieldset>


                <fieldset class="sign_field">
                    <legend class="sign_legend" >Password</legend>
                    <input class="sign_password" type="password" onfocus="visEye(eye2)" >
                    <img class="eye" id="eye2" src="./SVG/ic_baseline-remove-red-eye.svg" onclick="changeVis()">
                </fieldset>

                <fieldset class="sign_field">
                    <legend class="sign_legend" >Confirm password</legend>
                    <input class="sign_password" type="password" onfocus="visEye(eye3)" >
                    <img class="eye" id="eye3" src="./SVG/ic_baseline-remove-red-eye.svg" onclick="changeVis()">
                </fieldset>
                
                <div class="userType">
                    <p>Select User type:</p>
                    <button type="button" id="tenant" class="typeButton tenant"  >
                        Tenatnt <img id="tenantIcon" class="btnIcon" src="./SVG/tenant1.svg">
                    </button>

                    <button type="button" id="owner" class="typeButton owner"  >
                        Owner <img id="ownerIcon" class="btnIcon" src="./SVG/owner1.svg">
                    </button>
                </div>
                <button type="submit">Continue</button> 

            </form>

            <div class="others">
    
                <p>Do you have an account? <a href="./Login.php">Login</a> <br><br><br>
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


    <div class="footer">
        &copy; 2023 <span>RentalMate</span> All Right Reserved
    </div>
    
    <script src="./JS/myJS.js">
    </script>
    
</body>
</html>
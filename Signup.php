<?php
include("database.php");
?>


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

            <form class="sign_form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

                <h1>Create an account</h1>

                <fieldset class="sign_field">
                    <legend class="sign_legend">Email address</legend>
                    <input class="sign_input" type="email" name="email" required>
                </fieldset>

                <div class="name">
                    <fieldset class="sign_field">
                        <legend class="sign_legend">First name</legend>
                        <input class="sign_input" type="text" name="fname" required>
                    </fieldset>

                    <fieldset class="sign_field">
                        <legend class="sign_legend">Last name</legend>
                        <input class="sign_input" type="text" name="lname" required>
                    </fieldset>
                </div>

                <fieldset class="sign_field">
                    <legend class="sign_legend">Username</legend>
                    <input class="sign_input" type="text" name=uname required>
                </fieldset>


                <fieldset class="sign_field">
                    <legend class="sign_legend">Password</legend>
                    <input class="sign_password" type="password" name="password" required onfocus="visEye(eye2)">
                    <img class="eye" id="eye2" src="./SVG/ic_baseline-remove-red-eye.svg" onclick="changeVis()">
                </fieldset>

                <fieldset class="sign_field">
                    <legend class="sign_legend">Confirm password</legend>
                    <input class="sign_password" type="password" name="repassword" required onfocus="visEye(eye3)">
                    <img class="eye" id="eye3" src="./SVG/ic_baseline-remove-red-eye.svg" onclick="changeVis()">
                </fieldset>

                <div class="userType">
                    <p>Select User type:</p>
                    <button type="button" id="tenant" value="tenant" class="typeButton tenant">
                        Tenatnt <img id="tenantIcon" class="btnIcon" src="./SVG/tenant1.svg">
                    </button>

                    <button type="button" id="owner" value="owner" class="typeButton owner">
                        Owner <img id="ownerIcon" class="btnIcon" src="./SVG/owner1.svg">
                    </button>
                </div>
                <button type="submit" value="submit">Continue</button>

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

<?php

function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function password_strength($password) {
	if ( !preg_match("#[0-9]+#", $password) )
        return False;
	if ( !preg_match("#[a-z]+#", $password) )
        return False;
	if ( !preg_match("#[A-Z]+#", $password) )
        return False;

	return True;
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    // $userType = $_POST["userType"];     // to see later


    // Sanitize -> cause a problem in password 
    // $email = filter_input(INPUT_POST, $email, FILTER_SANITIZE_SPECIAL_CHARS);
    // $fname = filter_input(INPUT_POST, $email, FILTER_SANITIZE_SPECIAL_CHARS);
    // $lname = filter_input(INPUT_POST, $email, FILTER_SANITIZE_SPECIAL_CHARS);
    // $password = filter_input(INPUT_POST, $email, FILTER_SANITIZE_SPECIAL_CHARS);
    // $repassword = filter_input(INPUT_POST, $email, FILTER_SANITIZE_SPECIAL_CHARS);



    // Validate
    if ($password !== $repassword) {
        phpAlert("Passwords do not match");
        exit;
    }

    if (strlen($_POST["password"]) < 8) {
        phpAlert("Password must be at least 8 characters");
        exit;
    }

    if (!password_strength($password)) {
        phpAlert("Password must contain at least one capital letter, one small letter, and one number");
        exit;
    }


    /// 


    // Check if the username or email already exists in the database
    $query = "SELECT * FROM customer WHERE User_name ='$uname' OR Email = '$email'";
    $result = mysqli_query($conn, $query);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // User already exists
        phpAlert("Username or email already taken");
        exit;
    }
    //User Data is Valid. 

    // Hash the password, for security requirements. 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //Store in Database
    $query = "INSERT INTO customer (User_name , Email, First_name, Last_name, Password)
                             VALUES ('$uname', '$email', '$fname', '$lname', '$hashed_password')";
    mysqli_query($conn, $query);                          

    // Testing 

    if (mysqli_affected_rows($conn)) {
        phpAlert("User registered successfully");
        // redirect to login page 
        // header("Location: login.php");
        exit;
    } else {
        phpAlert("Error: User registration failed");
        exit; 
    }
}


mysqli_close($conn);
?>
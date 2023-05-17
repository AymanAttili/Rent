<?php
include("database.php");
?>

<!-- Almost Complete. Need to add session, remove alerts, add redirection -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Main template CSS file -->
    <link rel="stylesheet" href="./CSS/myStyle.css" />

    <!-- Google fonts -->
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

            <form class="sign_form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                <h1>Login</h1>

                <fieldset class="sign_field">
                    <legend class="sign_legend">Email address\Username</legend>
                    <input class="sign_input" type="text" name="uname" required>

                </fieldset>

                <fieldset class="sign_field">
                    <legend class="sign_legend">Password</legend>
                    <input class="sign_password" type="password" name="password" onfocus="visEye(eye1)" required>
                    <img class="eye" id="eye1" src="./SVG/ic_baseline-remove-red-eye.svg" onclick="changeVis()">
                </fieldset>


                <a href="./img/15939048_605.jpg">Forgot password...?</a>

                <button type="submit" name="submit" value="submit">Login</button>
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

<?php

function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
function validate($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve and Validate the form data
    $uname = validate($_POST["uname"]);
    $password = validate($_POST["password"]);

    // check if admin 
    $query = "SELECT * from administrator WHERE Admin_user_name = '$uname'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($row['Admin_user_name'] === $uname && password_verify($password, $row['Password'])) {

            phpAlert("Welcome Admin");

            // $_SESSION['user_name'] = $row['user_name'];
            // $_SESSION['name'] = $row['name'];
            // $_SESSION['id'] = $row['id'];

            // redirects to Admin page
            // header("Location: Admin.php");
            exit();
        } 
    }
    // not an admin, check if is customer

    $query = "SELECT * from customer WHERE User_name = '$uname'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {


        $row = mysqli_fetch_assoc($result);

        if ($row['User_name'] === $uname && password_verify($password, $row['Password'])) {
            // Successful login
            // check the user type
            // is Owner ?
            $user_type_query = "SELECT * from owner WHERE Owner_user_name = '$uname'";
            $user_type_result = mysqli_query($conn, $user_type_query);

            if (mysqli_num_rows($user_type_result) > 0) {
                // the user is Owner
                phpAlert("Welcome Owner");
                // redirects to MyRealty page
                // header("Location: MyRealty.php");
                exit();
            } else {
                // the user is Tenant
                phpAlert("Welcome Tenant");
                // redirects to home page
                // header("Location: index.php");
                exit();
            }
        } else {
            // Password is incorrect
            phpAlert("Password is incorrect, try again");
            // header("Location: Login.php");
            exit();
        }
    }
    else {
        // user name is incorrect
        // header("Location: Login.php");
       phpAlert("User name is incorrect, try again");
       exit();
    }
}

mysqli_close($conn);
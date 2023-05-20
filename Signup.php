<?php
include("database.php");
?>

<!-- The Page is Complete and Tested,
 can be updated later (more validation, better Alerts, White space in image name handling -> replace with'_') -->

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


            <?php
            $email = isset($_POST['email']) ? validate($_POST["email"]) : '';
            $fname = isset($_POST['fname']) ? validate($_POST["fname"]) : '';
            $lname = isset($_POST['lname']) ? validate($_POST["lname"]) : '';
            $uname = isset($_POST['uname']) ? validate($_POST["uname"]) : '';
            ?>

            <form class="sign_form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data" method="POST">

                <h1>Create an account</h1>

                <fieldset class="sign_field">
                    <legend class="sign_legend">Email address</legend>
                    <input class="sign_input" type="email" name="email" value="<?php echo $email; ?>" required>
                </fieldset>

                <div class=" name">
                    <fieldset class="sign_field">
                        <legend class="sign_legend">First name</legend>
                        <input class="sign_input" type="text" name="fname" value="<?php echo $fname; ?>" required>
                    </fieldset>

                    <fieldset class=" sign_field">
                        <legend class="sign_legend">Last name</legend>
                        <input class="sign_input" type="text" name="lname" value="<?php echo $lname; ?>" required>
                    </fieldset>
                </div>

                <fieldset class=" sign_field">
                    <legend class="sign_legend">Username</legend>
                    <input class="sign_input" type="text" name="uname" value="<?php echo $uname; ?>" required>
                </fieldset>

                <fieldset class=" sign_field">
                    <legend class="sign_legend">Password</legend>
                    <input class="sign_password" type="password" name="password" required onfocus="visEye(eye2)">
                    <img class="eye" id="eye2" src="./SVG/ic_baseline-remove-red-eye.svg" onclick="changeVis()">
                </fieldset>

                <fieldset class="sign_field">
                    <legend class="sign_legend">Confirm password</legend>
                    <input class="sign_password" type="password" name="repassword" required onfocus="visEye(eye3)">
                    <img class="eye" id="eye3" src="./SVG/ic_baseline-remove-red-eye.svg" onclick=changeVis()>
                </fieldset>


                <label for="user_image" class="uploadLabel">
                    <p id="file_name">Upload user photo.....</p>
                    <img src="./SVG/upload.svg" alt="">
                </label>

                <input id="user_image" class="user_image " style="background-color: white; border: none; display:none" type="file" accept="image/png, image/jpeg, image/jpg" name="image" required>


                <div class="userType">
                    <input type="hidden" name="userType" id="userTypeInput" value="tenant">
                    <p>Select User type:</p>
                    <button type="button" id="tenant" value="tenant" class="typeButton tenant" onclick="setUserType('tenant')">
                        Tenatnt <img id="tenantIcon" class="btnIcon" src="./SVG/tenant1.svg">
                    </button>

                    <button type="button" id="owner" value="owner" class="typeButton owner" onclick="setUserType('owner')">
                        Owner <img id="ownerIcon" class="btnIcon" src="./SVG/owner1.svg">
                    </button>
                </div>
                <button type="submit" value="submit">Continue</button>

            </form>

            <script>
                function setUserType(userType) {
                    document.getElementById("userTypeInput").value = userType;
                }
            </script>

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

function password_strength($password)
{
    if (!preg_match("#[0-9]+#", $password))
        return false;
    if (!preg_match("#[a-z]+#", $password))
        return false;
    if (!preg_match("#[A-Z]+#", $password))
        return false;

    return true;
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve and Validate the form data
    $email = validate($_POST["email"]);
    $fname = validate($_POST["fname"]);
    $lname = validate($_POST["lname"]);
    $uname = validate($_POST["uname"]);
    $password = validate($_POST["password"]);
    $repassword = validate($_POST["repassword"]);
    $user_type = validate($_POST["userType"]);
    $image_size = $_FILES['image']['size']; // size in bytes
    $image_tmp_location = $_FILES['image']['tmp_name'];
    // path of temporary file -> This file is only kept as long as the PHP script responsible for handling the form submission is running.
    //  So, if you want to use the uploaded file later on (for example, store it for display on the site),
    // you need to make a copy of it elsewhere(using move_uploaded_file()).
    $image_name_ext = $_FILES['image']['name']; // name with extension


    // Validate the password
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

    // Check if the username or email already exists in the database
    $query = "SELECT * FROM customer WHERE User_name = ? OR Email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // User already exists
        phpAlert("Username or email already taken");
        exit;
    }

    // Hash the password, for security requirements.
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    // process image 
    $image_name = pathinfo($image_name_ext, PATHINFO_FILENAME);
    $image_ext = pathinfo($image_name_ext, PATHINFO_EXTENSION);

    // if there is another image with the same exact name, expand filename with an auto-increment number 
    $i = 1;
    $image_name_copy = $image_name;
    while (file_exists("profile_uploads/" . $image_name . "." . $image_ext)) {
        $image_name = $image_name_copy . "($i)";
        $i++;
    }
    $image_name_ext = $image_name . $image_ext;
    $image_path = "profile_uploads/" . $image_name . "." . $image_ext;
    move_uploaded_file($image_tmp_location, $image_path);
    // end process image 



    //Store in Database
    $query = "INSERT INTO customer (User_name , Email, First_name, Last_name, Password, Profile_picture_path) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $uname, $email, $fname, $lname, $hashed_password, $image_path);
    mysqli_stmt_execute($stmt);

    // Check if the insertion was successful
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if ($affected_rows === 1) {
        //Store the customer in the appropriate table
        if ($user_type === "tenant") {
            $query = "INSERT INTO tenant (Tenant_user_name) VALUES (?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $uname);
            mysqli_stmt_execute($stmt);
        } else {
            $query = "INSERT INTO owner (Owner_user_name) VALUES (?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $uname);
            mysqli_stmt_execute($stmt);
        }

        // Check if the second insertion was successful
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if ($affected_rows === 1) {
            phpAlert("User registered successfully");
            // redirect to login page
            header("Location: login.php");
            exit;
        } else {
            phpAlert("Error: User registration failed");
            exit;
        }
    } else {
        phpAlert("Error: User registration failed");
        exit;
    }
}

mysqli_close($conn);
?>
<?php
include("database.php");
// get from session
$user_name_edit = $_SESSION['user_name_edit'];

$query = "SELECT * from customer where User_name = '$user_name_edit' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$first_name = $row['First_name'];
$last_name = $row['Last_name'];
$email = $row['Email'];
$phone_number = $row['Phone_number']; //nullable
$gender = $row['Gender'];   // nullable
$birth_date = $row['Birth_date']; // nullable 
$user_profile_image_path = $row['Profile_picture_path'];
$password = $row['Password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/pers-det-style.css">
    <link rel="stylesheet" href="./CSS/navbar.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Update user</title>
</head>

<body>

    <?php //include('./Templates/navbar.php');  -->
     ?>


    <!--------------------------------------START SECTION---------------------------------------->

    <section style="background: white">

        <div class="container">

            <div class="row align-items-start justify-content-between">

                <!--RIGHT SIDE-->
                <form class="right-side col-12 col-md-12 " action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data" method="POST">

                    <!--HEAD of right side-->
                    <div class="row align-items-center">

                        <!--Personal details & description-->
                        <div class="right-side-TITLE col-12 col-lg-9 col-xl-10 text-start">
                            <h1>Update user<?php echo " " . $user_name_edit ?></h1>
                        </div>


                        <!--profile image -->
                        <div class="col-12 col-lg-3 col-xl-2 text-center">

                            <label for="profile_photo" class="change_photo">
                                <img class="right-side-profile-image" height="80px" width="80px"
                                    src="./img/392f1715d423aedc.jpg" alt="">
                                <span>change photo</span>
                            </label>

                            <input type="file"  name="profile_photo" id="profile_photo" accept="image/png, image/jpeg, image/jpg" style="display:none" required>
                        </div>


                    </div>

                    <!--NAME-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--Name lable-->
                        <label class="col-12 col-sm-3" for="">Username</label>
                        <div class="myMid col-12 col-sm-8">
                            <p><?php echo $user_name_edit ?></php>
                        </div>
                        <!--Edit-->
                        <div class="editForm " id="usernameForm">
                            <label>New name:</label>
                            <input name="new_uname" type="text"></input>
                        </div>
                    </div>

                    <!--Display name-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--display name lable-->
                        <label class="col-12 col-sm-3" for="">Full name</label>
                        <div class="myMid col-12 col-sm-8">
                            <p><?php echo $first_name . " " . $last_name ?></p>
                        </div>
                        <!--Edit-->
                        <div class="editForm " id="fullnameForm">
                            <div>
                                <div>
                                    <label>First name:</label>
                                    <input name="new_fname" type="text"></input>
                                </div>

                                <div>
                                    <label>Last name:</label>
                                    <input name="new_lname" type="text"></input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Email address-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--Email address lable-->
                        <label class="col-12 col-sm-3" for="">Email address</label>
                        <div class="myMid col-12 col-sm-8">
                            <p><?php echo $email ?>@gmail.com</p>
                        </div>
                        <!--Edit-->

                        <div class="editForm " id="emailForm">
                            <label>New email:</label>
                            <input name="new_email" type="email"></input>
                        </div>
                    </div>

                    <!--Phone number-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--phone number lable-->
                        <label class="col-12 col-sm-3" for="">Phone number</label>
                        <div class="myMid col-12 col-sm-8">
                            <p><?php echo $phone_number ?></p>
                        </div>
                        <!--Edit-->

                        <div class="editForm " id="phoneForm">
                            <label>New phone:</label>
                            <input name="new_phone_number" type="phone"></input>
                        </div>

                    </div>

                    <!-- Set password -->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--password lable-->
                        <label class="col-12 col-sm-3" for="">Password</label>
                        <!--Edit-->

                        <div class="editForm " id="passordForm">
                            <label>Set password:</label>
                            <input name="new_password" type="text"></input>
                        </div>

                    </div>
                    <!--Gender-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--Gender lable-->
                        <label class="col-12 col-sm-3" for="">Gender</label>

                        <div class="myMid col-12 col-sm-8">
                            <p><?php echo $gender ?></p>
                        </div>

                        <!--Edit-->
                        <div class="editForm " id="genderForm">
                            <label>Your gender:</label>
                            <select name="new_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <!--birthdate-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--biryhdate lable-->

                        <label class="col-12 col-sm-3" for="">Birth date</label>
                        <div class="myMid col-12 col-sm-8">
                            <p><?php echo $birth_date ?></p>
                        </div>
                        <!--Edit-->

                        <div class="editForm " id="dateForm">
                            <label>New birthdate:</label>
                            <input name="new_birth_date" type="date"></input>
                        </div>
                    </div>


                    <div class="submitContainer">
                        <button type="submit" style="width: 80px; heigth: 40px" name="submit">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!------------------------------------------End SECTION---------------------------------------->


    <?php include('./Templates/footer.php') ?>

    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/settings.js"></script>

</body>

</html>

<?php
function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // no need for validation in admin privileges mode :)

    $new_uname = empty($_POST['new_uname']) ? $user_name_edit : $_POST['new_uname'];
    $new_fname = empty($_POST['new_fname']) ? $first_name : $_POST['new_fname'];
    $new_lname = empty($_POST['new_lname']) ? $last_name : $_POST['new_lname'];
    $new_email = empty($_POST['new_email']) ? $email : $_POST['new_email'];
    $new_phone_number = empty($_POST['new_phone_number']) ? $phone_number : $_POST['new_phone_number'];
    $new_password = empty($_POST['new_password']) ? $password :
        password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $new_gender = empty($_POST['new_gender']) ? $gender : $_POST['new_gender'];
    $new_birth_date = empty($_POST['new_birth_date']) ? $birth_date : $_POST['new_birth_date'];

    // $new_values = array(
    //     "new_uname" => $new_uname,
    //     "new_fname" => $new_fname,
    //     "new_lname" => $new_lname,
    //     "new_email" => $new_email,
    //     "new_phone_number" => $new_phone_number,
    //     "new_password" => $new_password,
    //     "new_gender" => $new_gender,
    //     "new_birth_date" => $new_birth_date
    // );

    $email_is_changed = false;
    $uname_is_changed = false;
    if ($new_email != $email) $email_is_changed = true;
    if ($new_uname != $user_name_edit) $uname_is_changed = true;


    // Check if the new username or new email already exists in the database
    $ok = true;
    if ($uname_is_changed) {
        $query_exists = "SELECT * FROM customer WHERE (User_name = '$new_uname')";
        $result = mysqli_query($conn, $query_exists);
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // username already exists
            $ok = false;
        }
    }
    if ($email_is_changed) {
        $query_exists = "SELECT * FROM customer WHERE (Email = '$new_email')";
        $result = mysqli_query($conn, $query_exists);
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Email already exists
            $ok = false;
        }
    }

    if (!$ok) {
        phpAlert("Username or email already taken");
        exit;
    }


    // no restrictions on passwords for admin 
    $query_update = "UPDATE customer
                     SET User_name = '$new_uname', First_name = '$new_fname',
                         Last_name = '$new_lname', Email = '$new_email', Password = '$new_password',
                         Phone_number = '$new_phone_number', Gender = '$new_gender',
                         Birth_date = '$new_birth_date'
                     WHERE User_name = '$user_name_edit'";

    mysqli_query($conn, $query_update);

    // on Update Cascade

    PhpAlert("User Updated Successfully");

    // update the user in session
    $_SESSION['user_name_edit'] = $new_uname;
    
    // to refresh the page. header won't work because of output
    echo "<script> location.replace('updateUser.php'); </script>"; 
    exit;
}
?>
<?php
include("database.php");
// get from session
$user_name_edit = "saif123";

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

    <?php //include('./Templates/navbar.php'); 
    ?>


    <!------------------------------------------START SECTION---------------------------------------->

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

                            <img class="right-side-profilr-image" height="80px" width="80px" <?php echo "src = '$user_profile_image_path'" ?> alt="">

                            <a href="#"><span>change photo</span></a>
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
                            <input name ="new_uname" type="text"></input>
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
                                    <input name ="new_fname" type="text"></input>
                                </div>

                                <div>
                                    <label>Last name:</label>
                                    <input name ="new_lname" type="text"></input>
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
                            <input name ="new_email" type="email"></input>
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
                            <input name ="new_phone_number" type="phone"></input>
                        </div>

                    </div>

                    <!-- Set password -->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--password lable-->
                        <label class="col-12 col-sm-3" for="">Password</label>
                        <!--Edit-->

                        <div class="editForm " id="passordForm">
                            <label>Set password:</label>
                            <input name ="new_password" type="text"></input>
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
                            <select name ="gender">
                                <option value ="male">Male</option>
                                <option value ="female">Female</option>
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
                            <input name ="new_birth_date" type="date"></input>
                        </div>
                    </div>


                    <div class="submitContainer">
                        <button type="submit" style="width: 80px; heigth: 40px" name = "submit">OK</button>
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
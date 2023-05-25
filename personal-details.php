<?php
//to be completed later

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("database.php");
// Check if the user is logged in
$loggedIn = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$usertype = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : '';

if ($loggedIn && $usertype == "admin") {
    header("location: admin.php");
}

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
    <title>Profile</title>
</head>

<body>

    <?php include('./Templates/navbar.php'); ?>


    <!------------------------------------------START SECTION---------------------------------------->

    <section style="background: white">

        <div class="container">

            <div class="row align-items-start justify-content-between">

                <!--LEFT SIDE-->
                <div class="col-12 col-md-4">

                    <!--DIV that contain all buttons-->
                    <div class="button-container">

                        <!--personal detail-->
                        <input class="button" id="personal-detail-button" type="button" value="Personal details" onclick="window.open('./personal-details.php','_self')">

                        <!--security-->
                        <input class="button" id="security-button" type="button" value="Security" onclick="window.open('./security.php','_self')">

                        <!--payment details-->
                        <input class="button" id="payment-button" type="button" value="Payment details" onclick="window.open('./Payment.php','_self')">

                        <!--Email notifications-->
                        <input class="button" id="email-notification-button" type="button" value="Email notifications" onclick="window.open('./email-noti.php','_self')">

                    </div>

                </div>

                <!--RIGHT SIDE-->
                <div class="right-side col-12 col-md-7">

                    <!--HEAD of right side-->
                    <div class="row align-items-center">

                        <!--Personal details & description-->
                        <div class="right-side-TITLE col-12 col-lg-9 col-xl-10 text-start">
                            <h1>Personal Details</h1>
                            <p>Update your info and find out how it's used.</p>
                        </div>


                        <!--profile image -->
                        <div class="col-12 col-lg-3 col-xl-2 text-center">

                            <label for="profile_photo" class="change_photo">
                                <img class="right-side-profile-image" height="80px" width="80px" <?php echo "src = '$profile_image_path' " ?> alt="">
                                <span>change photo</span>
                            </label>

                            <input type="file" name="profile_photo" id="profile_photo" style="display:none">
                        </div>


                    </div>

                    <!--NAME-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--Name lable-->
                        <label class="col-12 col-sm-3" for="">Username</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>El_Attili</p>
                        </div>
                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" onclick="myEdit('usernameForm','editUsername')" id="editUsername">Edit</a>

                        <form class="editForm erase" id="usernameForm">
                            <label>New name:</label>
                            <input type="text"></input>
                            <button type="submit">OK</button>
                        </form>
                    </div>

                    <!--Display name-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--display name lable-->
                        <label class="col-12 col-sm-3" for="">Full name</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>Ayman Attili</p>
                        </div>
                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" onclick="myEdit('fullnameForm','editFullname')" id="editFullname">Edit</a>

                        <form class="editForm erase" id="fullnameForm">
                            <div>
                                <div>
                                    <label>First name:</label>
                                    <input type="text"></input>
                                </div>

                                <div>
                                    <label>Last name:</label>
                                    <input type="text"></input>
                                </div>
                            </div>
                            <button type="submit" style="flex">OK</button>
                        </form>
                    </div>

                    <!--Email address-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--Email address lable-->
                        <label class="col-12 col-sm-3" for="">Email address</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>aymanman2002@gmail.com</p>
                        </div>
                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" onclick="myEdit('emailForm','editEmail')" id="editEmail">Edit</a>

                        <form class="editForm erase" id="emailForm">
                            <label>New email:</label>
                            <input type="email"></input>
                            <button type="submit">OK</button>
                        </form>
                    </div>

                    <!--Phone number-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--phone number lable-->
                        <label class="col-12 col-sm-3" for="">Phone number</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>+970593945459</p>
                        </div>
                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" onclick="myEdit('phoneForm','editPhone')" id="editPhone">Edit</a>

                        <form class="editForm erase" id="phoneForm">
                            <label>New phone:</label>
                            <input type="phone"></input>
                            <button type="submit">OK</button>
                        </form>

                    </div>

                    <!--Gender-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--Gender lable-->
                        <label class="col-12 col-sm-3" for="">Gender</label>

                        <div class="myMid col-12 col-sm-8">
                            <p>Male</p>
                        </div>

                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" onclick="myEdit('genderForm','editGender')" id="editGender">Edit</a>
                        <form class="editForm erase" id="genderForm">
                            <label>Your gender:</label>
                            <select>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <button type="submit">OK</button>
                        </form>
                    </div>

                    <!--birthdate-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--biryhdate lable-->

                        <label class="col-12 col-sm-3" for="">Birth date</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>26/2/2002</p>
                        </div>
                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" onclick="myEdit('dateForm','editDate')" id="editDate">Edit</a>

                        <form class="editForm erase" id="dateForm">
                            <label>New birthdate:</label>
                            <input type="date"></input>
                            <button type="submit">OK</button>
                        </form>
                    </div>

                </div>
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
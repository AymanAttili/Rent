<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/pers-det-style.css">
    <link rel="stylesheet" href="./CSS/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Profile</title>
</head>

<body>

    <?php    include('./Templates/navbar.php'); ?>


    <!------------------------------------------START SECTION---------------------------------------->

    <section>

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

                            <img class="right-side-profilr-image" height="80px" width="80px"
                                src="./img/392f1715d423aedc.jpg" alt="">

                            <a href="#"><span>change photo</span></a>
                        </div>


                    </div>

                    <!--NAME-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--Name lable-->
                        <label class="col-12 col-sm-3" for="">Username</label>
                        <input placeholder="Ayman Attili" class="col-12 col-sm-8" type="text">

                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" href="#">Edit</a>

                    </div>

                    <!--Display name-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--display name lable-->
                        <label class="col-12 col-sm-3" for="">Full name</label>
                        <input placeholder="Choose a disply name" class="col-12 col-sm-8" type="text">

                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" href="#">Edit</a>
                    </div>

                    <!--Email address-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--Email address lable-->
                        <label class="col-12 col-sm-3" for="">Email address</label>
                        <input placeholder="ayman.....@gmail.com" class="col-12 col-sm-8" type="email">

                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" href="#">Edit</a>
                    </div>

                    <!--Phone number-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--phone number lable-->
                        <label class="col-12 col-sm-3" for="">Phone number</label>
                        <input placeholder="Add your phone number" class="col-12 col-sm-8" type="tel">

                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" href="#">Edit</a>

                    </div>

                    <!--Gender-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--Gender lable-->
                        <label class="col-12 col-sm-3" for="">Gender</label>

                        <select style="color: gray;" class="col-12 col-sm-8" name="Gender">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>

                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" href="#">Edit</a>
                    </div>

                    <!--birthdate-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows">

                        <!--biryhdate lable-->
                        
                        <label class="col-12 col-sm-3" for="">Birth date</label>
                        <input class="col-12 col-sm-8" type="date">
 
                        <!--Edit-->
                        <a class="col-12 col-sm-1 text-start" href="#">Edit</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!------------------------------------------End SECTION---------------------------------------->


    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/browse.js"></script>

</body>

</html>
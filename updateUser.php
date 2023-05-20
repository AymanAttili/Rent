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
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Update user</title>
</head>

<body>

    <?php    include('./Templates/navbar.php'); ?>


    <!------------------------------------------START SECTION---------------------------------------->

    <section style="background: white">

        <div class="container">

            <div class="row align-items-start justify-content-between">

                <!--RIGHT SIDE-->
                <form class="right-side col-12 col-md-12 ">

                    <!--HEAD of right side-->
                    <div class="row align-items-center">

                        <!--Personal details & description-->
                        <div class="right-side-TITLE col-12 col-lg-9 col-xl-10 text-start">
                            <h1>Update user</h1>
                        </div>


                        <!--profile image -->
                        <div class="col-12 col-lg-3 col-xl-2 text-center">

                            <img class="right-side-profilr-image" height="80px" width="80px"
                                src="./img/392f1715d423aedc.jpg" alt="">

                            <a href="#"><span>change photo</span></a>
                        </div>


                    </div>

                    <!--NAME-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--Name lable-->
                        <label class="col-12 col-sm-3" for="">Username</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>El_Attili</p>
                        </div>
                        <!--Edit-->
                        <div class="editForm " id="usernameForm">
                            <label>New name:</label>
                            <input type="text"></input>
                        </div>
                    </div>

                    <!--Display name-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--display name lable-->
                        <label class="col-12 col-sm-3" for="">Full name</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>Ayman Attili</p>
                        </div>
                        <!--Edit-->
                        <div class="editForm " id="fullnameForm">
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
                        </div>
                    </div>

                    <!--Email address-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--Email address lable-->
                        <label class="col-12 col-sm-3" for="">Email address</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>aymanman2002@gmail.com</p>
                        </div>
                        <!--Edit-->

                        <div class="editForm " id="emailForm">
                            <label>New email:</label>
                            <input type="email"></input>
                        </div>
                    </div>

                    <!--Phone number-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--phone number lable-->
                        <label class="col-12 col-sm-3" for="">Phone number</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>+970593945459</p>
                        </div>
                        <!--Edit-->

                        <div class="editForm " id="phoneForm">
                            <label>New phone:</label>
                            <input type="phone"></input>
                        </div>

                    </div>

                    <!-- Set password -->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--password lable-->
                        <label class="col-12 col-sm-3" for="">Password</label>
                        <!--Edit-->

                        <div class="editForm " id="passordForm">
                            <label>Set password:</label>
                            <input type="text"></input>
                        </div>

                    </div>
                    <!--Gender-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--Gender lable-->
                        <label class="col-12 col-sm-3" for="">Gender</label>

                        <div class="myMid col-12 col-sm-8">
                            <p>Male</p>
                        </div>

                        <!--Edit-->
                        <div class="editForm " id="genderForm">
                            <label>Your gender:</label>
                            <select>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>                    
                    </div>

                    <!--birthdate-->
                    <div class="row align-items-center justify-content-between" id="informatin-rows2">

                        <!--biryhdate lable-->
                        
                        <label class="col-12 col-sm-3" for="">Birth date</label>
                        <div class="myMid col-12 col-sm-8">
                            <p>26/2/2002</p>
                        </div>
                        <!--Edit-->

                        <div class="editForm " id="dateForm">
                            <label>New birthdate:</label>
                            <input type="date"></input>
                        </div>
                    </div>

                    
                    <div class="submitContainer">
                        <button type="submit" style="width: 80px; heigth: 40px">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!------------------------------------------End SECTION---------------------------------------->


    <?php include('./Templates/footer.php')?>

    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/settings.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/Payment.css">
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

                        <!--payment & description-->
                        <div class="right-side-TITLE col-12 text-start">
                            <h1>Payment details</h1>
                            <p>Securely add or remove payment methods to make it easier when you book.</p>
                        </div>

                    </div>

                    <!--Payment card-->
                    <div class="row" id="informatin-rows">

                        <p class="col-12 col-sm-3">Payment card</p>

                        <!--Description-->
                        <p class="col-12 col-sm-6 col-lg-7">Pay with new card</p>

                        <!--Add Card-->
                        <a class="col-12 col-sm-3 col-lg-2" href="#">Add card</a>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/Admin.css">
    <link rel="stylesheet" href="./CSS/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Profile</title>
</head>

<body>

    <?php include('./Templates/navbar.php'); ?>


    <!------------------------------------------START SECTION---------------------------------------->

    <section>
        <div class="container">
            <button class="Add-users">Add User</button>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <h3 class="col-12 col-md-3 col-lg-2 text-start">Tenants:</h3>
                <label class="col-4 col-md-2 col-lg-2 text-center">Search: </label>
                <input class="col-5 col-md-4 col-lg-3" placeholder="User Name" type="text">
            </div>

            <div class="Tenants container">
                <div class="infornation-row row justify-content-between">
                    <h5 class="col-5 col-sm-7">Ayman Attili</h5>
                    <button class="Delete col-3 col-sm-2">Delete</button>
                    <button class="Update col-3 col-sm-2">Update</button>
                </div>
                <hr>
            </div>
            <div class="row align-items-center" style="margin-top: 50px;">
                <h3 class="col-12 col-md-3 col-lg-2 text-start">Owners:</h3>
                <label class="col-4 col-md-2 col-lg-2 text-center">Search: </label>
                <input class="col-5 col-md-4 col-lg-3" placeholder="User Name" type="text">
            </div>

            <div class="Tenants container align-items-center">
                <div class="infornation-row row justify-content-between align-items-center">
                    <h5 class="col-6 col-lg-2">Ayman Attili</h5>
                    <p class="col-6 col-lg-2">No. of properties <span>0</span></p>
                    <button class="Show-properties col-4 col-lg-2">Show properties</button>
                    <button class="Delete col-3 col-lg-2">Delete</button>
                    <button class="Update col-3 col-lg-2">Update</button>
                </div>
                <hr>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Main template CSS file-->
    <link rel="stylesheet" href="./CSS/index.css" />
    <link rel="stylesheet" href="./CSS/navbar.css" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Home</title>

</head>

<body>

    <?php include('./Templates/navbar.php'); ?>

    <section class="d-flex" style=" background-image: url(./img/background1.jpg); 
                     background-size: cover; 
                     background-position: center;
                     width: 100%;
                     height: 100vh;">

        <div class="search-bar d-flex" style="background-color: #E8ECEC;">

            <input placeholder="Tulkarm, Attil" style="width: 75%;
                          height: 100%; 
                          outline: none; 
                          border: none;
                          border-radius: 5%;
                          padding-left: 20px;
                          background-color: #E8ECEC;
                          font-size: large;" type="text">
            <button style="width: 25%;
                           height: 80%;
                           border-radius: 5%;
                           border: none;
                           background-color:#ec801d;
                           color: white;
                           text-align: center;
                           padding: 1px;
                           font-weight: 600;">Search</button>

        </div>
    </section>

    <!-- Start cards -->
    <section style="margin-top: 30px; padding: 20px;">

        <h1>Hot Properties</h1>

        <?php
        // get the 6 last inserted properties 
        $query = "SELECT * FROM property LIMIT 6";
        $result = mysqli_query($conn, $query);
        ?>

        <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $image_path = $row['Image_path'];
                $price = $row['Price'];
                $beds = $row['Beds'];
                $location_id = $row['Location_id'];
                $owner_user_name = $row['Owner_user_name'];

                // get the Country and City from location table
                $query_location = "SELECT * FROM location WHERE Location_id = '$location_id'";
                $result_location = mysqli_query($conn, $query_location);
                $row_location = mysqli_fetch_array($result_location);
                $country = $row_location['Country'];
                $city = $row_location['City'];

                // get the owner full name from customer table
                $query_owner = "SELECT * FROM customer WHERE User_name = '$owner_user_name'";
                $result_owner = mysqli_query($conn, $query_owner);
                $row_owner = mysqli_fetch_array($result_owner);
                $first_name = $row_owner['First_name'];
                $last_name = $row_owner['Last_name'];
            ?>
                <div class="card">
                    <img class="card-image" src=<?php echo ($image_path) ?>>
                    <div class="Description">
                        <div class="content">
                            <p><?php echo $price . "$" ?></p>
                            <p><?php echo $first_name . " " . $last_name ?></p>
                            <p><?php echo $city . ", " . $country ?></p>
                            <p><?php echo 'Beds: ' . $beds ?></p>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>

    </section>

    <!-- End cards -->




    <script src="./JS/browse.js"></script>


</body>
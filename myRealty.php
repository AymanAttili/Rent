<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$loggedIn = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$usertype = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : '';
include("database.php");
include("addProperty.php");
if (!$loggedIn) {
  header("location: index.php");
} 
else {
  if ($usertype == "admin") {
      header("location: admin.php");
  }
}


?>

<!-- need session handling -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="./CSS/myRealty.css">
  <link rel="stylesheet" href="./CSS/navbar.css">
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Profile</title>
</head>

<body>

  <?php include('./Templates/navbar.php'); ?>


  <!------------------------------------------END HEADER---------------------------------------->
  <section>
    <div class="container">
      <h1>Add Property</h1>
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="POST">
        <div class="row justify-content-center">
          <div class="left-side col-12 col-lg-6">
            <div class="row justify-content-center align-items-center" style="margin-top: 10px;">
              <label class="col-12 col-md-3 text-center" for="">Location</label>
              <input class="col-4 mx-2" placeholder="Lat" type="text" id="lat" name="lat">
              <input class="col-4" placeholder="Lng" type="text" id="lng" name="lng">
            </div>

            <div class="mapContainer col-12" style="margin-top: 10px; margin-bottom: 10px;">
              <a id="getBtn" class="direction-link" target="_blank"> Get Directions</a>
              <div id="map"></div>

              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUxruZQ8r_AszFmZvHCH_hlDrUL3_plRE"></script>

              <script src="./js/addMap.js"></script>
            </div>
          </div>
          <div class="right-side row col-12 col-lg-6">
            <div class="information  row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">Image</label>
              <input class="col-7 col-md-8" style="background-color: white; border: none;" type="file" accept="image/png, image/jpeg, image/jpg" name="image" required>
            </div>
            <hr>
            <div class="information row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">Price</label>
              <input class="col-7 col-md-8" type="number" name="price" required>
            </div>
            <hr>
            <div class="information row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">Country</label>
              <input class="col-7 col-md-8" type="text" name="country" required>
            </div>
            <div class="information row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">City</label>
              <input class="col-7 col-md-8" type="text" name="city" required>
            </div>
            <div class="information row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">Street</label>
              <input class="col-7 col-md-8" type="text" name="street">
            </div>
            <hr>
            <div class="information row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">Description</label>
              <input class="col-7 col-md-8" type="text" name="description">
            </div>
            <hr>
            <div class="information row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">Beds</label>
              <input class="col-7 col-md-8" type="number" name="beds" required>
            </div>
            <hr>
            <div class="information row align-items-center">
              <label class="text-center" style="display: block;" for="">Date</label>
              <div class="row align-items-center">
                <label class="col-5 col-md-4 text-center" for="">From</label>
                <input class="col-7 col-md-8" type="date" name="from_date" required>
              </div>
              <div class="row align-items-center">
                <label class="col-5 col-md-4 text-center" for="">To</label>
                <input class="col-7 col-md-8" type="date" name="to_date" required>
              </div>
            </div>
          </div>

          <button class="col-12 Add-prop text-center" type="submit" name="submit">Add Property</button>
        </div>
      </form>
    </div>
  </section>

  <?php
  // get all properties for that owner
  $owner_user_name = $username; // from session

  // get the full name of the owner 
  $query_owner = "SELECT * FROM customer WHERE User_name = '$owner_user_name'";
  $result_owner = mysqli_query($conn, $query_owner);
  $row_owner = mysqli_fetch_array($result_owner);
  $first_name = $row_owner['First_name'];
  $last_name = $row_owner['Last_name'];
  ?>


  <section>

    <div class='container'>
      <h1 style='margin-bottom: 30px;'>My Properties</h1>
      <div class='fc' style='display: flex; justify-content: space-between; flex-wrap: wrap;'>
        <?php
        $query = "Select * FROM property WHERE Owner_user_name = '$owner_user_name'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
          // get the Country and City from location table
          $location_id = $row['Location_id'];
          $query_location = "SELECT * FROM location WHERE Location_id = '$location_id'";
          $result_location = mysqli_query($conn, $query_location);
          $row_location = mysqli_fetch_array($result_location);
          $country = $row_location['Country'];
          $city = $row_location['City'];

          // get other info from property table 
          $image_path = $row['Image_path'];
          $price = $row['Price'];
          $beds = $row['Beds'];
          $property_id = $row['Property_id'];
        ?>
          <div class='card'>
            <img class='card_image' src=<?php echo ($image_path) ?>>
            <div class='Description'>
              <div class='content'>
                <p><?php echo $price . "$" ?></p>
                <p><?php echo $first_name . " " . $last_name ?></p>
                <p><?php echo $city . ", " . $country ?></p>
                <p><?php echo 'Beds: ' . $beds ?></p>
                <form class="hidden-form" action="deleteProperty.php" method="POST">
                  <div class='Delete-and-Update'>
                    <input type="hidden" name="property_id" value=<?php echo $property_id ?>>
                    <button class='Delete-button' type='submit'>Delete</button>
                </form>
              </div>
            </div>
          </div>
      </div>
    <?php
        } ?>
    </div>
    </div>
  </section>


  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery-3.6.4.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/browse.js"></script>

</body>

</html>
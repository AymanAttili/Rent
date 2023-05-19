<?php
include("database.php");
include("addProperty.php");
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


  
  <?php
  // get all properties for that owner
  // $owner_user_name = $_SESSION['user_name']
  $owner_user_name = "AboSofian"; // for testing purposes only 

  // get the full name of the owner 
  $query_owner = "SELECT * FROM customer WHERE User_name = '$owner_user_name'";
  $result_owner = mysqli_query($conn, $query_owner);
  $row_owner = mysqli_fetch_array($result_owner);
  $first_name = $row_owner['First_name'];
  $last_name = $row_owner['Last_name'];
  ?>


  <section>

    <div class='container'>
      <h1 style='margin-bottom: 30px;'>Properties: </h1>
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
        ?>
          <div class='card'>
            <img class='card_image' src=<?php echo ($image_path) ?>>
            <div class='Description'>
              <div class='content'>
                <p><?php echo $price . "$" ?></p>
                <p><?php echo $first_name . " " . $last_name ?></p>
                <p><?php echo $city . ", " . $country ?></p>
                <p><?php echo 'Beds: ' . $beds?></p>
                <div class='Delete-and-Update'>
                  <button class='Delete-button' type='button'>Delete</button>
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
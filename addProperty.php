<?php
// session_start();

// works fine, need session handling, further validation, White space in image name handling -> replace with'_'

function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
function validate($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and Validate the form data
    $price = validate($_POST['price']);
    $country = validate($_POST['country']);
    $city = validate($_POST['city']);
    $street = validate($_POST['street']);  // can be empty
    $description = validate($_POST['description']); // can be empty
    $beds = validate($_POST['beds']);
    $lat = validate($_POST['lat']);
    $lng = validate($_POST['lng']);
    $timestamp_from = strtotime($_POST['from_date']);
    $timestamp_to = strtotime($_POST['to_date']);
    $from_date = date('Y-m-d', $timestamp_from);
    $to_date = date('Y-m-d', $timestamp_to);

    $image_size = $_FILES['image']['size']; // size in bytes
    $image_tmp_location = $_FILES['image']['tmp_name'];

    // path of temporary file -> This file is only kept as long as the PHP script responsible for handling the form submission is running.
    //  So, if you want to use the uploaded file later on (for example, store it for display on the site),
    // you need to make a copy of it elsewhere(using move_uploaded_file()).

    $image_name_ext = $_FILES['image']['name']; // name with extension
    $image_name = pathinfo($image_name_ext, PATHINFO_FILENAME);
    $image_ext = pathinfo($image_name_ext, PATHINFO_EXTENSION);

    // if there is another image with the same exact name, expand filename with an auto-increment number 
    $i = 1;
    $image_name_copy = $image_name;
    while (file_exists("property_uploads/" . $image_name . "." . $image_ext)) {
        $image_name = $image_name_copy . "($i)";
        $i++;
    }
    $image_name_ext = $image_name . $image_ext;
    $image_path = "property_uploads/" . $image_name . "." . $image_ext;
    move_uploaded_file($image_tmp_location, $image_path);

    $location_id = "";
    //check if the location already exists 
    $query = "SELECT * FROM location WHERE Latitude = ? AND Longitude = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $lat, $lng);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        // location already exists
        $row = mysqli_fetch_assoc($result);
        $location_id = $row['Location_id'];
    } else {
        // insert new location into table location
        $query = "INSERT INTO location (City, Country, Street, Longitude, Latitude )
                        VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sssss", $city, $country, $street, $lng, $lat);
        mysqli_stmt_execute($stmt);
        // get the id of the inserted tuple
        $location_id = mysqli_insert_id($conn);
    }

    // insert into table property
    // $Owner_user_name = $_SESSION['user_name'];
    $Owner_user_name = "AboSofian";
    $query = "INSERT INTO property (Owner_user_name, Price, Description, Start_date, End_date, Location_id, Image_path, Beds)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sisssisi", $Owner_user_name, $price, $description, $from_date, $to_date, $location_id, $image_path, $beds);
    mysqli_stmt_execute($stmt);

    // Redirect back to the same page
    header("Location: myRealty.php");
    exit();
}

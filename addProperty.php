<?php
include("database.php");
session_start();


// need testing and connection with owner page 

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
    while (file_exists($image_name . "." . $image_ext)) {
        $filename = $file['filename'] . " ($i)";
        $i++;
    }

    $query = "INSERT INTO location (City, Country, Street, Longitude, Latitude )
                        VALUES ('$city', '$country', '$street', '$lng', '$lat')";

    if (mysqli_query($conn, $query)) {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    $Owner_user_name = $_SESSION['user_name'];
    $query = "INSERT INTO property(Owner_user_name, Price, Description, Start_date, End_date, Location_id)
                        VALUES ('$Owner_user_name', $price, '$description', $from_date, $to_date, '$location_id')";

    if (mysqli_query($conn, $query)) {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

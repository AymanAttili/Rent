<?php
include("database.php");

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
    $image = $_FILES['image']; 
    $image_location = $_FILES['image']['tmp_name']; 
    $image_name = $_FILES['image']['name']; 
    $image_path = "property_uploads/".$image_name;  
}


?>
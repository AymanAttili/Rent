<?php

// NOT finished yet, to be completed later

// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
// include("database.php");
// $loggedIn = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;
// $username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
// $usertype = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : '';

// if ($usertype != "tenant") {
//     header("location: index.php");
// }
// $owner_of_property = $_SESSION['owner_of_property']; 
// $property_id = $_SESSION['property_id'];
// $query = "INSERT INTO rent (Property_id, Owner_user_name, Tenant_user_name) VALUES ('$property_id', '$owner_of_property', '$username')"; 
// mysqli_query($conn, $query); 
// exit; 
// ?>
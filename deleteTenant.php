<?php
include("database.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $delete_uname = $_POST['Owner_user_name'];
    mysqli_query($conn, "DELETE FROM customer WHERE User_name = '$delete_uname'");
    mysqli_query($conn, "DELETE FROM tenant WHERE Tenant_user_name = '$delete_uname'");
    // delete from rent ?
    header("Location: admin.php");
}
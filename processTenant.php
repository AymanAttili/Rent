<?php
include("database.php");
if (isset($_POST['delete'])) { 
    $delete_uname = $_POST['tenant_user_name'];
    mysqli_query($conn, "DELETE FROM customer WHERE User_name = '$delete_uname'");
    mysqli_query($conn, "DELETE FROM tenant WHERE Tenant_user_name = '$delete_uname'");
    // on delete cascade in database
    header("Location: admin.php");
}
if (isset($_POST['update'])) { 
    
}
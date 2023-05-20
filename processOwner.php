<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("database.php");
if (isset($_POST['delete'])) {
    $delete_uname = $_POST['delete'];
    mysqli_query($conn, "DELETE FROM customer WHERE User_name = '$delete_uname'");
    mysqli_query($conn, "DELETE FROM owner WHERE Owner_user_name = '$delete_uname'");
    // on delete cascade in database
    header("Location: admin.php");
    exit;
}

if (isset($_POST['update'])) {
    $_SESSION['user_name_edit'] = $_POST['update'];
    header("Location: updateUser.php");
    exit;
}

if (isset($_POST['show'])) {
    $_SESSION['user_name_show'] = $_POST['show'];
    header("Location: showProperties.php");
    exit;
}

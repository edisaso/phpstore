<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
//including the database connection file
include("connection.php");

//getting id of the data from URL
$id = $_GET['id'];

//deleting the row from the table
$result = mysqli_query($con, "DELETE FROM products WHERE id=$id");

//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>

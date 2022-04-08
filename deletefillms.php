<?php
include_once "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM films_tb WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    header("location:index.php"); // redirects to all records page
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
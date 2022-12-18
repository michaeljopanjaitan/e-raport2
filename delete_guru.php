<?php
// include database connection file
include_once("connection.php");

// Get id from URL to delete that user
$id_guru = $_GET['id_guru'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM guru WHERE id_guru='$id_guru'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:dataguru.php");

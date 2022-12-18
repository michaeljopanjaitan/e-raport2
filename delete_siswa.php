<?php
// include database connection file
include_once("connection.php");

// Get id from URL to delete that user
$NIS = $_GET['NIS'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM siswa WHERE NIS='$NIS'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:datasiswa.php");

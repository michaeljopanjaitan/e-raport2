<?php
//$koneksi = mysqli_connect("localhost", "root", "", "e-raport2");
$conn = mysqli_connect("localhost", "root", "", "e-raport");

// Check connection
// if (!$koneksi) {
//   echo "Koneksi database gagal : " . mysqli_connect_error();
// }
if (!$conn) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
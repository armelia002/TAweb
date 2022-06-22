<?php
// Create connection
$con = mysqli_connect("localhost", "root", "", "toko_online");

// Check connection
if (mysqli_connect_errno()) {
  echo "failed to connect:". mysqli_connect_error();
  exit();
}
?>
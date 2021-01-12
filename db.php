<?php
// Enter your Host, username, password, database below.
/* Connect to database */
$con = mysqli_connect("localhost","root","12345678","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php
$db_conn = mysqli_connect("localhost","root","","react_php_crud");

if ($db_conn->connect_error) {
  die("Connection failed: " . $db_conn->connect_error);
}
// echo "Connected successfully";

?>
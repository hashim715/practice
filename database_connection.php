<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'as_practice';

$mysqli = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
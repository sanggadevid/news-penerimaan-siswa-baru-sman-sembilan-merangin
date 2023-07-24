<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
$user = "root";
$password = "";
$database = "db_sman9";

$con = mysqli_connect($server, $user, $password, $database) or die(mysqli_connect_error());

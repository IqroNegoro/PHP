<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$server = "localhost";
$user = "root";
$pass = "";
$db = "fetching";

$connect = mysqli_connect("$server", "$user", "$pass", "$db");

$data = $_POST["nama"];

$sql = "INSERT INTO fetching (nama) VALUES (";
$result = mysqli_query($connect, $sql);

?>
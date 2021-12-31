<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$server = "localhost";
$user = "root";
$pass = "";
$db = "fetching";

$connect = mysqli_connect("$server", "$user", "$pass", "$db");

$sql = "SELECT * FROM fetching";
$result = mysqli_query($connect, $sql);

$output = "";

while ($row = mysqli_fetch_assoc($result)) {
    if ($output != "") {$output .= ",";}
    $output .= '{"id":"' . $row["id"] . '",';
    $output .= '"nama":"' . $row["nama"] . '",';
    $output .= '"tanggal":"' . $row["tanggal"] . '"}';
}
    $output = '{"data":[' . $output . "]}";

    echo($output);
    mysqli_close($connect);

?>
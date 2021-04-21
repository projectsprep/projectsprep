<?php
include "rate_calculate.php";
header("Access-Control-Allow-Origin:*");
$connection = mysqli_connect("localhost","root","","rating");
$rating = $_POST['rating'];
$comment = $_POST['comment'];
;


$check_sql = "SELECT * FROM userrate ";

$check_query = mysqli_query($connection,$check_sql);

$result = mysqli_fetch_assoc($check_query);

echo json_encode($result['id']);








?>
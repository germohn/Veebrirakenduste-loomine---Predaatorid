<?php
require_once "./common/core/database/dbconnect.php";

$sql = "SELECT COUNT(*) AS accounts FROM users";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);
$count = $data['accounts'];

$_SESSION["numberOfAccoutns"] = $count;





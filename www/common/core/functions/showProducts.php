<?php
require_once "./common/core/database/dbconnect.php";
$myId = $_SESSION["userId"];
//echo $myId;
$sql = "SELECT products.name as name, products.price as price, products.description as description FROM products " .
    "INNER JOIN users ON products.owner_id = users.user_id where products.owner_id = '$myId'";

$query = mysqli_query($connect, $sql);

//while ($row = mysqli_fetch_row($query)) {
//    $name = (string)$row[0];
//    $price = (double)$row[1];
//    $description = (string)$row[2];
//    var_dump($name);
//    var_dump($price);
//    var_dump($description);
//
//
//         <tr>
//            <td>John</td>
//            <td>Doe</td>
//            <td>john@example.com</td>
//        </tr>
//        <tr>
//            <td>Mary</td>
//            <td>Moe</td>
//            <td>mary@example.com</td>
//        </tr>
//        <tr>
//            <td>July</td>
//            <td>Dooley</td>
//            <td>july@example.com</td>
//        </tr>

if (mysqli_num_rows($query) > 0 ) {
    while ($row2 = mysqli_fetch_row($query)) {
        echo '<tr>';
        foreach ($row2 as $key => $value) {
            echo '<td>', $value, '</td>';
        }
        echo '</tr>';
    }
}else{
    echo 'You dont have any products for sale';
}
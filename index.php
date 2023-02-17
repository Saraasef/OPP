<?php
include 'Autoload.php';
// $userPortofulio = new user();
$db = new Database();
$connect = $db->DBconnect();
// $sql = 'SELECT * FROM `form`';
// $result = $connect->query($sql);
// while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
//     echo $rows['Family'];
$us = new users();
echo $us->fetchNameById(2);
// }
?>

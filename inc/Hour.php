<?php
require('var.php');
$connection = connect();
$connection->query("SET SESSION time_zone = '-9:00'");
$avg = round( $connection->query("SELECT AVG( rowsPerHour ) AS avgPerHour FROM (SELECT COUNT( * ) AS rowsPerHour FROM `forms` GROUP BY DATE( TIMESTAMP )) AS a")->fetch_object()->avgPerHour, 1);
mysqli_close($connection);
echo json_encode($avg);
?>
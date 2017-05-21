<?php
require('var.php');
$connection = connect();
$connection->query("SET SESSION time_zone = '-9:00'");

$result = $connection->query('SELECT * FROM `forms` WHERE `done` = "0" and `pictaken`="0" ORDER BY `timestamp` ASC');
			$num_rows = $result->num_rows;
			
mysqli_close($connection);
echo json_encode($num_rows);
?>
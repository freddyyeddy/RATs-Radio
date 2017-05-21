<?php
require('var.php');
$connection = connect();
$piecht = $connection->query("SELECT SUM(CASE WHEN done =1 THEN 1 ELSE 0 END ) AS Done, SUM(CASE WHEN pictaken =1 AND done<>1 THEN 1 ELSE 0 END ) AS 'Photo_Taken', SUM(CASE WHEN pictaken=0 THEN 1 ELSE 0 END ) AS registered FROM forms");
 $r = $piecht->fetch_assoc();
mysqli_close($connection);
echo json_encode($r);
?>
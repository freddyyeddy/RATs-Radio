<?php
// $conn = new mysqli($servername, $username, $password);
function connect(){
$servername = "localhost";
$username = "senshicon";
$password = "JJ3GQLa4CQdXnG4e";
$database = "senshicon";
    return new mysqli($servername, $username, $password,$database);
          if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
           } 
}
?>
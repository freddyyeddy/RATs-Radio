<?php
session_start();
var_dump($_SESSION);
unset($_SESSION[id]);
$_SESSION[photosteven] = 0;
?>
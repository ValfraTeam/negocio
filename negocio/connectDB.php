<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "negocio";

$connectionDB = new  mysqli($host, $user, $pass, $db) or die("error".mysqli_errno($connectionDB));

?>
<?php

$server = "remotemysql.com";
$uname = "S3zNYTFaEx";
$password = "rJ8V6qH95T";
$dbname = "S3zNYTFaEx";

$conn = mysqli_connect($server, $uname, $password, $dbname);

if (!$conn) {
    echo "Connection failed";
}

?>
<?php

$dbname = "gajikaryawan";
$user = "root";
$password = "";

try{
    $dbh = new PDO('mysql:host=localhost;dbname=' . $dbname, $user, $password);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>
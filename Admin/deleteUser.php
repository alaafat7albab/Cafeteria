<?php
include_once("../DataBase.php");
$mydb = new DataBase();
try {
    $mydb ->connect();
    $mydb->delete("users",$_REQUEST['id']);
    header("location:allUsers.php");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
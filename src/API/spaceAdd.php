<?php

include("conn.php");

$spaceName = $_POST['spaceName'];
$spaceTimeStart = $_POST['spaceTimeStart'];
$spaceTimeClose = $_POST['spaceTimeClose'];
$city = $_POST['city'];
$district = $_POST['district'];
$village = $_POST['village'];
$address = $_POST['address'];
$type = $_POST['type'];
$spaceSize = $_POST['spaceSize'];
$capacity = $_POST['capacity'];
$manager = $_POST['manager'];
$phone = $_POST['phone'];
$secondPhone = $_POST['secondPhone'];
$note = $_POST['note'];
$pic = $_POST['pic'];


$sql = "INSERT INTO SPACE VALUES(DEFAULT,?,?,?,?,?,?,?,'2023-03-01',?,?,?,?);";
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1 ,$spaceName);
    $statement->bindValue(2 ,$type);
    $statement->bindValue(3 ,$capacity);
    $statement->bindValue(4 ,$spaceSize);
    $statement->bindValue(5 ,$note);
    $statement->bindValue(6 ,$manager);
    $statement->bindValue(7 ,$phone);
    $statement->bindValue(8 ,$spaceTimeStart);
    $statement->bindValue(9 ,$spaceTimeClose);
    $statement->bindValue(10 ,$address);
    $statement->bindValue(11 ,$pic);
    $statement->execute();


?>
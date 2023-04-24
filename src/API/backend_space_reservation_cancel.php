<?php

include("conn.php");


$sql = "UPDATE SPACE_ORDER SET STATUS = -1 WHERE ID = ?";

$ID = $_POST['ID'];

$statement = $pdo -> prepare($sql);
$statement->bindValue(1, $ID);
$statement->execute();


?>
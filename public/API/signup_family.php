<?php

    include("conn.php");

    $sql = "INSERT into FAMILY VALUES(?,?,?,1)";

    $ID= $_POST['ID'];
    $ADDRESS= $_POST['ADDRESS'];

    $statement = $pdo -> prepare($sql);

    $statement->bindValue(1, $ID);
    $statement->bindValue(2, $ID);
    $statement->bindValue(3, $ADDRESS);

    $statement->execute();



?>
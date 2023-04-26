<?php
    include("conn.php");

    $spaceID = $_POST["spaceID"];

    $sql = "UPDATE SPACE SET STATUS = 0  WHERE ID = ?";

    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1, $spaceID);
    $statement->execute();

    echo '更新';




?>
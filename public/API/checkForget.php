<?php

include("conn.php");

$account = $_POST['account'];
$email = $_POST['email'];

$sql = "SELECT * FROM USER WHERE ACCOUNT = :account and EMAIL = :email";

$statement = $pdo->prepare($sql);
$statement->bindValue(':account', $account);
$statement->bindValue(':email', $email);
$statement->execute();

$data = $statement->fetchAll();

if (count($data) > 0) {
    echo json_encode($data);
} else {
    echo "not_match";
}

?>
<?php

    include("conn.php");	

    if(!isset($_SESSION)){
        session_start(); 
    }
    
    if(isset($_SESSION["userAccount"])) { 
        $response = array('isLoggedIn' => true, 'userAccount' => $_SESSION["userAccount"]);
    } else {
        $response = array('isLoggedIn' => false);
    }

    header('Content-Type: application/json');
    echo json_encode($response);
?>
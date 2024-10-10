<?php
require_once 'dbConfig.php';

function insertIntostudentRecord ($pdo, $userID, $user_name,$First_name,$Last_name, $profession,
$statusinLife,$experience,$Age) {+

    $sql = "INSERT INTO users (userID, user_name,First_name,Last_name, profession,
statusinLife,experience,Age) VALUES (?,?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$pdo, $userID, $user_name,$First_name,$Last_name, $profession,
    $statusinLife,$experience,$Age]);

    if ($executeQuery) {
        return true;
    }
}          
?>
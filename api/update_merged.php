<?php
include_once "conn.php";

if(!isset($_POST['u'])) {
    die('Syntax error: can\'t connect.');
} else {
    $token = $_POST['u'];
    $data = $_POST['data'];

    $array = explode(',', $data);

    $sql = "INSERT INTO controlli_aggregati(fascia, controlli, eccezioni, id_macchina, zona, giorno) values (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $array['fascia'], $array['controlli'], $array['eccezioni'], $array['id_macchina'], $array['zona'], $array['giorno']);
    $stmt->execute();

}
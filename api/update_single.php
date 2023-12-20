<?php
include_once "conn.php";

if(!isset($_POST['u'])) {
    die('Syntax error: can\'t connect.');
} else {
    $token = $_POST['u'];
    $data = $_POST['data'];
    $array = json_decode($data);

    $sql = "INSERT INTO controllo_singolo(id_macchina, zona, eccezione) values (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $array['id_macchina'], $array['zona'], $array['eccezione']);
    $stmt->execute();

}
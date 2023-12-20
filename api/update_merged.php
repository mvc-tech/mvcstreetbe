<?php
include_once "conn.php";

if(!isset($_POST['u'])) {
    die('Syntax error: can\'t connect.');
} else {
    $token = $_POST['u'];
    $data = $_POST['data'];
    $array = json_decode($data)
    $giorno = [];

    $sql_giorno = "SELECT * FROM controlli_aggregati";
    $result_giorno = $conn->query($sql_giorno);
    while($row = mysqli_fetch_assoc($result_giorno)) {
        array_push($giorno, $row);
    }

    if(in_array($array['giorno'], $giorno)) {
        $sql_update = "UPDATE controlli_aggregati SET fascia=?, controlli=?, eccezioni=?, id_macchina=?, zona=? WHERE giorno=?)";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssssss", $array['fascia'], $array['controlli'] + $giorno['controlli'], $array['eccezioni'] + $giorno['eccezioni'], $array['id_macchina'], $array['zona'], $array['giorno']);
        $stmt->execute();
    } else {
        $sql_add = "INSERT INTO controlli_aggregati(fascia, controlli, eccezioni, id_macchina, zona, giorno) values (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql_add);
        $stmt->bind_param("ssssss", $array['fascia'], $array['controlli'], $array['eccezioni'], $array['id_macchina'], $array['zona'], $array['giorno']);
        $stmt->execute();
    }

}
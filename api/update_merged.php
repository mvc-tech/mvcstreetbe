<?php
include_once "conn.php";

if(!isset($_POST['u'])) {
    die('Syntax error: can\'t connect.');
} else {
    $token = $_POST['u'];
    $data = $_POST['data'];
    $array = json_decode($data)
    $giorno = [];

    $sql_giorno = "SELECT * FROM controlli_aggregati WHERE giorno=$array['giorno'] AND id_macchina=$array['id_macchina'] AND fascia=$array['fascia'] AND zona=$array['zona']";
    $result_giorno = $conn->query($sql_giorno);
    while($row = mysqli_fetch_assoc($result_giorno)) {
        array_push($giorno, $row);
    }

    if(mysql_num_rows($result_giorno) != false) {
        while($row = mysqli_fetch_assoc($result_giorno)) {
            array_push($giorno, $row);
        }

        $array['controlli'] = $giorno[0]['controlli'] + $array['controlli'];
        $array['eccezioni'] = $giorno[0]['eccezioni'] + $array['eccezioni'];

        $sql_update = "UPDATE controlli_aggregati SET controlli=?, eccezioni=? WHERE giorno=? AND id_macchina=? AND fascia=? AND zona=?)";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssssss", $array['controlli'], $array['eccezioni'], $array['giorno'], $array['id_macchina'], $array['fascia'], $array['zona']);
        $stmt->execute();
    } else {
        $sql_add = "INSERT INTO controlli_aggregati(fascia, controlli, eccezioni, id_macchina, zona, giorno) values (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql_add);
        $stmt->bind_param("ssssss", $array['fascia'], $array['controlli'], $array['eccezioni'], $array['id_macchina'], $array['zona'], $array['giorno']);
        $stmt->execute();
    }

}
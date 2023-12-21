<?php
// include "../res/conn.php";

function fetchGrafico($conn) {
    $query = "SELECT SUM(controlli) as controlli,SUM(eccezioni) as eccezioni, giorno FROM controlli_aggregati GROUP BY giorno";

    $result = $conn -> query($query);

    $items = [];

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
    }

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    return $items;
}

function fetchMacchine($conn){
    $query = "SELECT id_macchina FROM controlli_aggregati GROUP BY id_macchina";

    $result = $conn -> query($query);

    $items = [];

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
    }

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    return $items;
}

function fetchZona($conn){
    $query = "SELECT zona FROM controlli_aggregati GROUP BY zona";

    $result = $conn -> query($query);

    $items = [];

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
    }

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    return $items;
}

function fetchGraficoZona($conn, $zona) {
    $query = "SELECT SUM(controlli) as controlli,SUM(eccezioni) as eccezioni, giorno FROM controlli_aggregati WHERE zona='$zona' GROUP BY giorno";

    $result = $conn -> query($query);

    $items = [];

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
    }

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    return $items;
}

function fetchGraficoMacchina($conn, $id) {
    $query = "SELECT SUM(controlli) as controlli,SUM(eccezioni) as eccezioni, giorno FROM controlli_aggregati WHERE id_macchina='$id' GROUP BY giorno";

    $result = $conn -> query($query);

    $items = [];

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
    }

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    return $items;
}

function fetchGraficoGiorno($conn, $giorno) {
    $query = "SELECT SUM(controlli) as controlli,SUM(eccezioni) as eccezioni, giorno FROM controlli_aggregati WHERE giorno='$giorno' GROUP BY giorno";

    $result = $conn -> query($query);

    $items = [];

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
    }

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    return $items;
}
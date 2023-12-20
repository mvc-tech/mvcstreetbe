<?php
include_once "res/conn.php";


// @arary -> fetch_assoc() tabella mvcstreet.controllo_singolo
function fetchControlliSingoli($conn) {
    $query = "SELECT * FROM controllo_singolo";

    $result = $conn -> query($query);

    $items = [];


    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $$conn -> connect_error;
    }

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    return $items;
}

// @arary -> fetch_assoc() tabella mvcstreet.controlli_aggregati
function fetchControlliAggregati($conn) {

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $$conn -> connect_error;
    }

    if($result = $conn -> query ("SELECT * FROM controlli_aggregati")) {
        $items = $result -> fetch_assoc();
    }

    return $items;
}
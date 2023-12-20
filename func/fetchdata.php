<?php
include_once "res/conn.php";


// @arary -> fetch_assoc() tabella mvcstreet.controllo_singolo
function fetchControlliSingoli($conn) {

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $$conn -> connect_error;
    }

    if($result = $conn -> query ("SELECT * FROM controllo_singolo")) {
        $items = $result -> fetch_assoc();
    }

    return $items;
}

// @arary -> fetch_assoc() tabella mvcstreet.controlli_aggregati
function fetchControlliSingoli($conn) {

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $$conn -> connect_error;
    }

    if($result = $conn -> query ("SELECT * FROM controllo_singolo")) {
        $items = $result -> fetch_assoc();
    }

    return $items;
}
<?php
include_once "res/conn.php";

function fetchControlliSingoli($conn) {

    if($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $controlloSingolo -> connect_error;
    }

    if($result = $conn -> query ("SELECT * FROM controllo_singolo")) {
        echo "returned rows: " . $result -> num_rows;
        $result ->free_result();
    }
}
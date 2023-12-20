<?php
include_once "conn.php";

if(!isset($_GET['u'])) {
    die('Syntax error: can\'t connect.');
} else {
    $token = $_GET['u'];
    $data = $_GET['data'];

    $array = explode(',', $data);
}
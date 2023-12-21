<?php
include_once "includes/globals.php";
include_once "res/conn.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?=$SITE_TITLE?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Core theme CSS (includes FontAwesome)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- File CSS Personalizzato -->
        <link href="css/custom.css" rel="stylesheet" />
    </head>
    <body>
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <div class="navbar-brand"></div>
                        <div class="spacer-height"></div>
                    </div>
                </nav>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><?=$SITE_TITLE?></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tablet.php">Tablet View</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="table_aggregati.php">Analisi Aggregate</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="table_individuali.php">Analisi Individuali</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="chart_aggregati.php">Grafici</a>
                </div>
            </div>
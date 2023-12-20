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
    </head>
    <body>
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <div class="spacer-height"></div>
                        <div class="navbar-brand"><img src="assets/logo.png" style="position:relative; right:30px!important;"/></div>
                    </div>
                </nav>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">
                    <!--<h1><?=$SITE_TITLE?></h1>-->
                    <img src="assets/mvcstreet.png" style="width:200px; padding:0;margin:0;"/>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tablet.php">Tablet View</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="table_aggregati.php">Analisi Aggregate</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="table_individuali.php">Analisi Individuali</a>
                </div>
            </div>

            <?= ?>
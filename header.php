<?php
session_start();
include_once "includes/globals.php";
include_once "res/conn.php";
include_once "res/query.php";

if(!getUsername($_POST['username'])){
    header('Location: http://customers.mvc-technology.com/404.php');
}

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
                        <div class="spacer-height"></div>
                        <div class="navbar-brand"><img src="assets/logo.png" style="position:relative; right:0.5vw!important;"/></div>
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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Tablet View</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="table_aggregati.php">Tabella Analisi Aggregate</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="chart_aggregati.php">Chart Analisi Aggregate</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="table_individuali.php">Analisi Individuali</a>
                </div>
            </div>

           
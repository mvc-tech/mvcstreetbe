<?php 
include_once "header.php";
include_once "func/fetchdata.php";
include_once('func/fetchchart.php');
?>

<div id="page-content-wrapper">
    <!-- Page content-->
<div class="container-fluid">
        <h1 class="mt-4">Analisi Aggregate</h1>
        <div class="spacer"></div>
    </div>

    <div class="container-fluid">
        <div class="container-tabella">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fascia Oraria</th>
                        <th scope="col">Numero Controlli</th>
                        <th scope="col">Numero di Eccezioni</th>
                        <th scope="col">ID Macchina</th>
                        <th scope="col">Zona</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                        <?php foreach(fetchControlliAggregati($conn) as $controllo) :?>
                            <tr>
                                <td><?=$controllo['id']?></td>
                                <td><?=$controllo['fascia']?></td>
                                <td><?=$controllo['controlli']?></td>
                                <td><?=$controllo['eccezioni']?></td>
                                <td><?=$controllo['id_macchina']?></td>
                                <td><?=$controllo['zona']?></td>
                            </tr>

                        <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    
</div>
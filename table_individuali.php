<?php 
include_once "header.php";
include_once "func/fetchdata.php";
include_once "res/query.php";

if(!getUsername($_POST['username'])){
    header('Location: http://customers.mvc-technology.com/404.php');
}

$giovanni
?>

<div id="page-content-wrapper">
    <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Analisi Individuali</h1>
    </div>

    <div class="container-fluid">
        <div class="container-tabella">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Targa</th>
                        <th scope="col">Data</th>
                        <th scope="col">ID Macchina</th>
                        <th scope="col">Zona</th>
                        <th scope="col">Eccezione</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                        <?php foreach(fetchControlliSingoli($conn) as $controllo) :?>
                            <tr class="tr">
                                <td><?=$controllo['id']?></td>
                                <td><?=$controllo['targa']?></td>
                                <td><?=$controllo['dataora']?></td>
                                <td><?=$controllo['id_macchina']?></td>
                                <td><?=$controllo['zona']?></td>
                                <td><?=$controllo['eccezione']?></td>
                            </tr>

                        <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Funzione per aggiornare la tabella


        function updateTable() {
            tr = document.getElementsByClassName('tr');

            num= tr.length;

            $.ajax({
                url: 'a.php', 
                type: 'POST',
                success: function(data) {
                    if(data == num)
                    {
                        console.log('nulla')
                    }else if(data > num){
                        location.reload();
                    }
                }
            });
        }
        // Aggiorna la tabella ogni 5 secondi (modificabile a seconda delle esigenze)
        setInterval(updateTable, 5000);
    });
</script>
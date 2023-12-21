<?php 
include_once "header.php";
include_once "func/fetchchart.php";
?>
<div id="page-content-wrapper">
    <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Grafici</h1>
    </div>
    <div class='spacer'></div>
    <div class="container-fluid" id='form-container'>
        <div class="container-fluid">
            <form method='POST'>
                <label>Scegli una macchina</label>
                <select class="form-select" name="macchina">
                    <option value=''>Seleziona</option>
                    <?php foreach(fetchMacchine($conn) as $macchina) :?>
                    <option><?=$macchina['id_macchina']?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        <div class="container-fluid">
                <label>Scegli una zona</label>
                <select class="form-select" name="zona">
                <option value=''>Seleziona</option>
                    <?php foreach(fetchZona($conn) as $zona) :?>
                    <option><?=$zona['zona']?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        <div class="container-fluid">
                <label>Scegli un giorno</label>
                <input type='date' class='datepicker' name="giorno">
        </div>
            <button type='submit' name ='filter' class="btn btn-primary">Filtra...</button>
        </form>
    </div>
    <div class='big-spacer'></div>
    <div class="container-fluid">
        <canvas id='myChart'></canvas>
    </div>
</div>

<?php

$i=0;

if(isset($_POST['filter'])){
    $zona = $_POST['zona']; 
    $macchina = $_POST['macchina']; 
    $giorno = $_POST['giorno'];

    $arr= array();

    if($zona)array_push($arr,"zona='$zona'");
    if($macchina)array_push($arr, "id_macchina='$macchina'");
    if($giorno)array_push($arr, "giorno='$giorno'");

    if(sizeof($arr) > 1){
        switch (sizeof($arr))
        {
            case 2:
                $res = " WHERE " . $arr[0] ." AND ". $arr[1];
                break;
            case 3:
                $res = " WHERE " . $arr[0] ." AND ". $arr[1] ." AND ". $arr[2];
                break;
            default:
                $res = 'Errore!';
        }
    }elseif(!sizeof($arr)){
        $res = '';
    }else{
        $res = " WHERE " . $arr[0];
    }

    $query = "SELECT SUM(controlli) as controlli,SUM(eccezioni) as eccezioni, giorno FROM controlli_aggregati $res GROUP BY giorno";

    $result = $conn->query($query);

    $items = [];

    while($row = mysqli_fetch_assoc($result)) {
        array_push($items, $row);
    }

    foreach($items as $controllo)
    {
        $label[$i] = $controllo['giorno'];
        $eseguite[$i] = $controllo['controlli'];
        $eccezioni[$i] = $controllo['eccezioni'];

        $i++;
    }
}else{
    foreach(fetchGrafico($conn) as $controllo)
    {
        $label[$i] = $controllo['giorno'];
        $eseguite[$i] = $controllo['controlli'];
        $eccezioni[$i] = $controllo['eccezioni'];

        $i++;
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');

    const label =<?=json_encode($label) ?>;
    const eseguite = <?=json_encode($eseguite) ?>;
    const eccezioni =<?=json_encode($eccezioni) ?>;

    new Chart(ctx, {
        type: 'bar',
        data: {
        labels: label,
        datasets: [{
            label: 'Acquisizioni per giorno',
            data: eseguite,
            borderWidth: 1
        },{
            label: 'Eccezioni per giorno',
            data: eccezioni,
            borderWidth: 1 
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
</script>

<?php
?>
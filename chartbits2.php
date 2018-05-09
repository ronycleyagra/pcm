<?php
$seqbits = $_GET["seqbits"];
$sequciafinal = $labels = "[";
for ($i = 0; $i < 16; $i++) {
    $atual = substr($seqbits, $i, 1);
    if ($atual == '1') {
        $sequciafinal .= "1,0,";
    } else {
        $sequciafinal .= "0,1,";
    }
    $labels .= "'.','$atual',";
}
$sequciafinal .= "],";
$labels .= "],";
?>
<style>
    .chart-container {
        position: relative;
        margin: auto;
        height: 20vw;
        width: 90vw;
    }
</style>
<canvas id="chartjs-0" ></canvas>
<script>
    new Chart(document.getElementById("chartjs-0"),
    {"type":"line",
            "data":{
            <?php
            echo "labels" . ":" . $labels
            ?>
            "datasets":[{
            "label":"PCM - Biphase-L",
            <?php
            echo "data" . ":" . $sequciafinal
            ?>
            "fill":false,
                    "borderColor":"rgb(0, 0, 255)",
                    "lineTension":0.5,
                    steppedLine: true
            }]
            },
            "options":{
            maintainAspectRatio: false,
                    scales: {
                    yAxes: [{
                    ticks: {
                    max: 1,
                            min: 0,
                            stepSize: 1
                    },
                            gridLines: {
                            display: false
                            }
                    }]
                    }
            }});
    document.getElementById("chartjs-0").style.height = '300px';
</script>

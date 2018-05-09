<?php
$seqbits = $_GET["seqbits"];

//echo seqbits;
$sequciafinal = "[".
substr($seqbits,0,1).",".
substr($seqbits,1,1).",".
substr($seqbits,2,1).",".
substr($seqbits,3,1).",".
substr($seqbits,4,1).",".
substr($seqbits,5,1).",".
substr($seqbits,6,1).",".
substr($seqbits,7,1).",".
substr($seqbits,8,1).",".
substr($seqbits,9,1).",".
substr($seqbits,10,1).",".
substr($seqbits,11,1).",".
substr($seqbits,12,1).",".
substr($seqbits,13,1).",".
substr($seqbits,14,1).",".
substr($seqbits,15,1)."],";

//echo $sequciafinal;
//print_r($array);
?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Complete Example</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="./Chart.min.js"></script>

</head>
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
	//bits
	//chart.canvas.parentNode.style.height = '128px';
	new Chart(document.getElementById("chartjs-0"),
	{"type":"line",
	"data":{
		"labels":["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"],
		"datasets":[{
			"label":"PCM - NRZ-L",
			//"data":[1,0,1,1,0,0,1,0,1,1,0,0,1,1,0,1],
			<?php
			echo "data".":".$sequciafinal
			?>
			"fill":false,
			"borderColor":
			"rgb(75, 192, 192)",
			"lineTension":0.1,
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


</body>
</html>


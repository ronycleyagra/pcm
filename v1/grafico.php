<?
$tituloPizza = $_POST["tituloPizza"];
$tituloColuna = $_POST["tituloColuna"];
$tituloTabela = $_POST["tituloTabela"];
$valorEPP = $_POST["valorEPP"];
$valorMIE = $_POST["valorMIE"];
$valorEI = $_POST["valorEI"];
$valorMEE = $_POST["valorMEE"];
$valorPF = $_POST["valorPF"];
$valorTotal = $valorEPP+$valorMIE+$valorEI+$valorMEE+$valorPF;
?>
<html>
<head>
	<meta charset="UTF-8">
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.load('visualization', '1', {packages:['table']});
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['PORTE', 'Quantidade'],
					['Empr. Pequeno Porte',     <? echo $valorEPP;?>],
					['Empreendedor Individual',      <? echo $valorEI;?>],
					['Microempresa', <? echo $valorMIE;?>],
					['Media Empresa', <? echo $valorMEE;?>],
					['PESSOA FÍSICA', <? echo $valorPF;?>]
					]);

				var options = {
				  title: '<? echo $tituloPizza;?>',
				  is3D: true,
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
				google.visualization.events.addListener(chart, 'ready', function () {
				  document.getElementById('png').outerHTML = 
				  '<a href="' + chart.getImageURI() + '">Salvar gráfico Pizza como imagem</a>';
					//chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
					//console.log(chart_div.innerHTML);
				  });
				chart.draw(data, options);
			}
		  
			function drawColuna() {
				var data = google.visualization.arrayToDataTable([
				  ['PORTE', 'Quantidade'],
					['Empr. Pequeno Porte',     <? echo $valorEPP;?>],
					['Empreendedor Individual',      <? echo $valorEI;?>],
					['Microempresa', <? echo $valorMIE;?>],
					['Media Empresa', <? echo $valorMEE;?>],
					['PESSOA FÍSICA', <? echo $valorPF;?>]
				]);

				var options = {
					title: 'Pessoas atendidas pela Orientação Empresasial - ARJP',
					is3D: true,
					width: '600px',
				};

				var chartColuna = new google.visualization.ColumnChart(document.getElementById('coluna'));
				google.visualization.events.addListener(chartColuna, 'ready', function () {
				  document.getElementById('pngColuna').outerHTML = 
				  '<a href="' + chartColuna.getImageURI() + '">Salvar gráfico coluna como imagem</a>';
				  });
				chartColuna.draw(data, options);
			}
		  
			function drawTable() {
				var data = google.visualization.arrayToDataTable([
				  ['PORTE', 'Quantidade'],
					['Empr. Pequeno Porte',     <? echo $valorEPP;?>],
					['Empreendedor Individual',      <? echo $valorEI;?>],
					['Microempresa', <? echo $valorMIE;?>],
					['Media Empresa', <? echo $valorMEE;?>],
					['Pessoa Física', <? echo $valorPF;?>],
					['Total', <? echo $valorTotal;?>],
				]);

				var options = {
				  title: 'Pessoas atendidas pela Orientação Empresasial - ARJP',
				  width: '400px',
				  //is3D: true,
				};

				var chart2 = new google.visualization.Table(document.getElementById('tabela'));
				chart2.draw(data, options);
			}
		  
			google.setOnLoadCallback(drawChart);
			google.setOnLoadCallback(drawColuna);
			google.setOnLoadCallback(drawTable);
		</script>
	</head>
	<body>
		<div id="piechart_3d" style="width: 900px; height: 600px;"></div>
		<div id='png'></div>
		<hr>
		<div id="coluna" style="width: 900px; height: 600px;"></div>
		<div id='pngColuna'></div>
		<hr>
		<div id="tabela"></div>
	</body>
</html>
<html>
<head>
	<meta charset="UTF-8">
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.load('visualization', '1', {packages:['table']});
			function drawPizza() {
				var data = google.visualization.arrayToDataTable([
					['PARTICIPANTES POR IDADE', 'Quantidade'],
					['JOVENS - 15', 3]
					]);

				var options = {
				  title: 'PARTICIPANTES POR IDADE',
				  is3D: true,
				};

				var chart = new google.visualization.PieChart(document.getElementById('pizza'));
				google.visualization.events.addListener(chart, 'ready', function () {
				  document.getElementById('png').outerHTML = 
				  '<a href="' + chart.getImageURI() + '">Salvar gráfico Pizza como imagem</a>';
					//chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
					//console.log(chart_div.innerHTML);
				  });
				chart.draw(data, options);
			}
		  
			/*
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
		  */
			google.setOnLoadCallback(drawPizza);
			//google.setOnLoadCallback(drawColuna);
			//google.setOnLoadCallback(drawTable);
		</script>
	</head>
	<body>
		<div id="pizza" style="width: 900px; height: 600px;"></div>
		
		<div id='png'></div>
		<!--
		<hr>
		<div id="coluna" style="width: 900px; height: 600px;"></div>
		<div id='pngColuna'></div>
		<hr>
		<div id="tabela"></div>
		-->
	</body>
</html>
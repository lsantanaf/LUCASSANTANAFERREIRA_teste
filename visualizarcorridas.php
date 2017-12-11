<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Visualizar motoristas</title>
<title>Teste Lucas Santana Ferreira</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
</head>
<body>
	<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="cadastracorrida.php">Cadastrar Corrida</a></li>
  <li role="presentation" class="active"><a href="cadastrapassageiro.php">Cadastrar Passageiros</a></li>
  <li role="presentation"><a href="visualizarpassageiro.php">Visualizar Passageiros</a></li>
  <li role="presentation" class="active"><a href="cadastramotorista.php">Cadastrar Motoristas</a></li>
  <li role="presentation"><a href="visualizarmotoristas.php">Visualizar Motoristas</a></li>
  <li role="presentation"><a href="altera_status.php">Alterar status do motorista</a></li>
	<script type="text/javacript" src="js/bootstrap.js"></script>
	<?php 
		
		include("conecxao.php");
		 

		 	$corrida = "SELECT id_corrida,corrida.id_motorista, nm_motorista, corrida.id_passageiro, nm_passageiro, vl_corrida from corrida, motorista, passageiro where corrida.id_motorista = motorista.id_motorista and corrida.id_passageiro=passageiro.id_passageiro order by id_corrida";

		 	$con=$mysqli->query($corrida) or die($mysqli->error);
	?>	
	
	<div class="container">
	  <h2 class="page-header">Corridas</h2>
	  	<div class="table-responsive">
	    	<table class="table table-striped table-bordered table-hover">
	      	<thead>
		      	<tr>
		        <th>CORRIDA</th>
		        <th>ID MOTORISTA</th>
	            <th>MOTORISTA</th>
	            <th>IS PASSAGEIRO</th>
	            <th>PASSAGEIRO</th>
		        <th>VALOR DA CORRIDA</th>
		      	</tr>
		      	</thead>
		     	<tbody>
			      	<?php while($dado = $con->fetch_array()){ ?>
			        <tr>
			          <td><?php echo $dado["id_corrida"]; ?></td>
			          <td><?php echo $dado["id_motorista"]; ?></td>
			          <td><?php echo $dado["nm_motorista"]; ?></td>
			          <td><?php echo $dado["id_passageiro"]; ?></td>
			          <td><?php echo $dado["nm_passageiro"]; ?></td>
			          <td><?php echo $dado["vl_corrida"]; ?></td>
			        </tr>
			       <?php } ?>
		      	</tbody>
	    	</table>
	  	</div>
	</div>
</body>
</html>
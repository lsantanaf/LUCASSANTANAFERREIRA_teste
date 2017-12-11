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
  <li role="presentation"><a href="visualizarcorridas.php">Visualizar Corridas</a></li>
  <li role="presentation" class="active"><a href="cadastrapassageiro.php">Cadastrar Passageiros</a></li>
  <li role="presentation"><a href="visualizarpassageiro.php">Visualizar Passageiros</a></li>
  <li role="presentation" class="active"><a href="cadastramotorista.php">Cadastrar Motoristas</a></li>
  <li role="presentation"><a href="altera_status.php">Alterar status do motorista</a></li>
	<script type="text/javacript" src="js/bootstrap.js"></script>
	<?php 
		
		include("conecxao.php");
		 

		 	$motoristaAtivo = "select * from motorista order by nm_motorista";

		 	$con=$mysqli->query($motoristaAtivo) or die($mysqli->error);
	?>	
	
	<div class="container">
	  <h2 class="page-header">Motoristas</h2>
	  	<div class="table-responsive">
	    	<table class="table table-striped table-bordered table-hover">
	      	<thead>
		      	<tr>
		        <th>Nome do(a) motorista</th>
		        <th>Data de nascimento</th>
	            <th>CPF</th>
	            <th>Modelo do carro</th>
	            <th>Status</th>
		        <th>Sexo</th>
		      	</tr>
		      	</thead>
		     	<tbody>
			      	<?php while($dado = $con->fetch_array()){ ?>
			        <tr>
			          <td><?php echo $dado["nm_motorista"]; ?></td>
			          <td><?php echo $dado["dt_nascimento"]; ?></td>
			          <td><?php echo $dado["id_cpf"]; ?></td>
			          <td><?php echo $dado["ds_carro"]; ?></td>
			          <td><?php echo $dado["ds_status"]; ?></td>
			          <td><?php echo $dado["ds_sexo"]; ?></td>
			        </tr>
			       <?php } ?>
		      	</tbody>
	    	</table>
	  	</div>
	</div>
</body>
</html>
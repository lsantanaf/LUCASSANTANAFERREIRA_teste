<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastra Corrida</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	<link rel="stylesheet" href="css/alertify.css">
</head>
<body>
	<ul class="nav nav-pills">
  <li role="presentation"><a href="visualizarcorridas.php">Visualizar Corridas</a></li>
  <li role="presentation" class="active"><a href="cadastrapassageiro.php">Cadastrar Passageiros</a></li>
  <li role="presentation"><a href="visualizarpassageiro.php">Visualizar Passageiros</a></li>
  <li role="presentation" class="active"><a href="cadastramotorista.php">Cadastrar Motoristas</a></li>
  <li role="presentation"><a href="visualizarmotoristas.php">Visualizar Motoristas</a></li>
  <li role="presentation"><a href="altera_status.php">Alterar status do motorista</a></li>
	<script type="text/javacript" src="js/bootstrap.js"></script>
	<script type="text/javacript" src="js/alertify.js"></script>
	<div class="container">
	  <h2 class="page-header">Cadastrar Corrida</h2>
		<div class="d-flex flex-colun justify-content-center">
			<div class="container">
				<form method="post">
			<!-- <select name="select_motorista">
				<option>Selecione o motorista</option>
				<?php
				include("conecxao.php");
				    $motoristas = "Select nm_motorista from motorista";
				    $result_motoristas = $mysqli->query($motoristas) or die($mysqli->error);
				    while($linha_motorista = mysqli_fetch_assoc($result_motoristas)){ ?>
						<option value="<?php echo $linha_motorista['id_motorista']; ?>"><?php echo $linha_motorista['nm_motorista']; ?></option> <?php } ?>	

			</select>
			
			<select name="select_passageiro">
				<option>Selecione o passageiro</option>
				<?php
				    $passageiros = "Select nm_passageiro from passageiro";
				    $result_passageiros = $mysqli->query($passageiros) or die($mysqli->error);
				    while($linha_passageiro = mysqli_fetch_assoc($result_passageiros)){ ?>
						<option value="<?php echo $linha_passageiro['id_passageiro']; ?>"><?php echo $linha_passageiro['nm_passageiro']; ?></option> <?php } ?>	

			</select>-->

			<?php 
		
		include("conecxao.php");
		 

		 	$motoristaAtivo = "select * from motorista where ds_status = 1 order by nm_motorista";

		 	$conm=$mysqli->query($motoristaAtivo) or die($mysqli->error);

		 	$passageiros = "select * from passageiro order by nm_passageiro";

		 	$conp=$mysqli->query($passageiros) or die($mysqli->error);
	?>	
	
	<div class="container">
	  <h3 class="page-header">Motoristas</h3>
	  	<div class="table-responsive">
	    	<table class="table table-striped table-bordered table-hover">
	      	<thead>
		      	<tr>
		        <th>ID</th>
		        <th>Nome do(a) motorista</th>
		      	</tr>
		      	</thead>
		     	<tbody>
			      	<?php while($dadom = $conm->fetch_array()){ ?>
			        <tr>
			          <td><?php echo $dadom["id_motorista"]; ?></td>
			          <td><?php echo $dadom["nm_motorista"]; ?></td>
			        </tr>
			       <?php } ?>
		      	</tbody>
	    	</table>
	  	</div>
	</div>
	<div class="container">
	  <h3 class="page-header">Passageiros</h3>
	  	<div class="table-responsive">
	    	<table class="table table-striped table-bordered table-hover">
	      	<thead>
		      	<tr><th>ID</th>
		        <th>Nome do(a) passageiro</th>		        
		      	</tr>
		      	</thead>
		     	<tbody>
			      	<?php while($dadop = $conp->fetch_array()){ ?>
			        <tr>
			          <td><?php echo $dadop["id_passageiro"]; ?></td>
			          <td><?php echo $dadop["nm_passageiro"]; ?></td>
			        </tr>
			       <?php } ?>
		      	</tbody>
	    	</table>
	  	</div>
	</div>

			<input type="number" class="form-control" name="idmotorista"  required placeholder="ID motorista" min="1">
			<input type="number" class="form-control" name="idpassageiro"  required placeholder="ID passageiro" min="1">
			<input type="text" name="vl_corrida" onkeyup="maskIt(this,event,'#.###,##',true,{pre:'R$'})">
			<input type="submit" class="form-control" name="insert_corrida" value="Cadastrar Corrida">

		</div>
	</form>

	<?php
		if(isset($_POST['insert_corrida']))
		{
			//pegando os valores de entrada

			$id_motorista = $_POST['idmotorista'];
			$id_passageiro = $_POST['idpassageiro'];
			$vl_corrida = $_POST['vl_corrida'];

	//definindo query
			$insere_corrida = "INSERT INTO `corrida`(`id_motorista`, `id_passageiro`, `vl_corrida`) VALUES ($id_motorista,$id_passageiro,$vl_corrida)";

			$resp_corrida = $mysqli->query($insere_corrida) or die ($mysqli->error);
		}
	 ?>
		</div>
		</div>
</body>
</html>
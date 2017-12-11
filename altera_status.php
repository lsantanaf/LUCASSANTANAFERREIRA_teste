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
  <li role="presentation" class="active"><a href="cadastracorrida.php">Cadastrar Corrida</a></li>
  <li role="presentation"><a href="visualizarcorridas.php">Visualizar Corridas</a></li>
  <li role="presentation" class="active"><a href="cadastrapassageiro.php">Cadastrar Passageiros</a></li>
  <li role="presentation"><a href="visualizarpassageiro.php">Visualizar Passageiros</a></li>
  <li role="presentation" class="active"><a href="cadastramotorista.php">Cadastrar Motoristas</a></li>
  <li role="presentation"><a href="visualizarmotoristas.php">Visualizar Motoristas</a></li>
	<script type="text/javacript" src="js/bootstrap.js"></script>
	<script type="text/javacript" src="js/alertify.js"></script>
	<div class="container">
	  <h2 class="page-header">Altera status</h2>
		<div class="d-flex flex-colun justify-content-center">
			<div class="container">
			<?php 		
				include("conecxao.php");
		 

		 		$motoristaAtivo = "select * from motorista order by ds_status";

		 		$conm=$mysqli->query($motoristaAtivo) or die($mysqli->error);

				if(isset($_POST['update_status']))
					{
						//pegando os valores de entrada

						$id_motorista = $_POST['idmotorista'];
						$ds_status = $_POST['dsstatus'];

				//definindo query
						$update_status = "update 'motorista' set 'ds_status' = $ds_status where 'id_motorista' = $id_motorista";

						$resp_status=$mysqli->query($update_status) or die ($mysqli->error);

						if($resp_status)
				   		{
				        	echo 'Atualizado';
				    	}
				    	else{
				        	echo 'Não atualizado';
				    	}
					}
	 		?>	
			  	<h3 class="page-header">Motoristas</h3>
			  	<div class="table-responsive">
			    	<table class="table table-striped table-bordered table-hover">
			      	<thead>
				      	<tr>
				        <th>ID</th>
				        <th>Nome do(a) motorista</th>
				        <th>1 para Ativo e 0 para Não ativo</th>
				      	</tr>
				      	</thead>
				     	<tbody>
					      	<?php while($dadom = $conm->fetch_array()){ ?>
					        <tr>
					          <td><?php echo $dadom["id_motorista"]; ?></td>
					          <td><?php echo $dadom["nm_motorista"]; ?></td>
					          <td><?php echo $dadom["ds_status"]; ?></td>
					        </tr>
					       <?php } ?>
				      	</tbody>
			    	</table>
			  	</div>
			</div>


			<input type="number" class="form-control" name="idmotorista"  required placeholder="ID motorista" >
			<input type="number" class="form-control" name="dsstatus"  required placeholder="Status 0 off 1 on" min="0" max="1">
			<input type="submit" class="form-control" name="update_status" value="Atualizar Status">

		</div>
	</form>
		</div>
</body>
</html>
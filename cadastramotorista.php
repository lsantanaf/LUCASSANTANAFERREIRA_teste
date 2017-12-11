<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadastrar motorista</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
</head>
<body>
	<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="cadastracorrida.php">Cadastrar Corrida</a></li>
  <li role="presentation"><a href="visualizarcorridas.php">Visualizar Corridas</a></li>
  <li role="presentation" class="active"><a href="cadastrapassageiro.php">Cadastrar Passageiros</a></li>
  <li role="presentation"><a href="visualizarpassageiro.php">Visualizar Passageiros</a></li>
  <li role="presentation"><a href="visualizarmotoristas.php">Visualizar Motoristas</a></li>  
  <li role="presentation"><a href="altera_status.php">Alterar status do motorista</a></li>
	<script type="text/javacript" src="js/bootstrap.js"></script>
	
<?php 
		
		include("conecxao.php");

		if(isset($_POST['insert_motorista']))
		{
	//pegando os valores de entrada
			$nm_motorista = $_POST['nm_motorista'];
			$dt_nascimeto_motorista = $_POST['dtmotorista'];
			$cpf_motorista = $_POST['cpf_motorista'];
			$modelo_carro = $_POST['modelo_carro'];
			$status_motorista = $_POST['status_motorista'];
			$sexo_motorista = $_POST['sexo_motorista'];

	//definindo query
			$insere_motorista = "INSERT INTO `motorista`(`nm_motorista`, `dt_nascimento`, `id_cpf`, `ds_carro`, `ds_status`, `ds_sexo`) VALUES ('$nm_motorista','$dt_nascimeto_motorista',$cpf_motorista,'$modelo_carro',$status_motorista,$sexo_motorista)";

			$resp_motorista = $mysqli->query($insere_motorista) or die ($mysqli->error);

			//fazendo o encerramento
			if($resp_motorista)
	   		{
	        	echo 'Motorista cadastrado';
	    	}
	    	else{
	        	echo 'Motorista não cadastrado';
	    	}
		}
	?>
<div class="container">
	  <h2 class="page-header">Cadastrar motorista</h2>
	<div class="d-flex flex-row justify-content-center">
		<form method="post">
			
	            <input type="text" class="form-control" name="nm_motorista" required placeholder="Nome do motorista">
			
	            <input type="number" class="form-control" name="dtmotorista"  required placeholder="Nascimento YYYY/MM/DD">
	        
	            <input type="number" class="form-control" name="cpf_motorista" required placeholder="CPF - apenas números" min="0" max="99999999999">
	       
	            <input type="text" class="form-control" name="modelo_carro" required placeholder="Modelo do carro">
	       
	            <input type="number" class="form-control" name="status_motorista" required placeholder="Status 0 off 1 on" min="0" max="1">
	        
	            <input type="number" class="form-control" name="sexo_motorista" required placeholder="Sexo 0 fem 1 mas" min="0" max="1">
	            <input type="submit" class="form-control" name="insert_motorista" value="Cadastrar">
	    	</div>    
	    </form>
	</div>
</div>
</body>
</html>
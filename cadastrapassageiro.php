<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>cadastrar passageiro</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
</head>
<body>
	<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="cadastracorrida.php">Cadastrar Corrida</a></li>
  <li role="presentation"><a href="visualizarcorridas.php">Visualizar Corridas</a></li>
  <li role="presentation"><a href="visualizarpassageiro.php">Visualizar Passageiros</a></li>
  <li role="presentation" class="active"><a href="cadastramotorista.php">Cadastrar Motoristas</a></li>
  <li role="presentation"><a href="visualizarmotoristas.php">Visualizar Motoristas</a></li>  
  <li role="presentation"><a href="altera_status.php">Alterar status do motorista</a></li>
	<script type="text/javacript" src="js/bootstrap.js"></script>
	
<?php 

		include("conecxao.php");

		if(isset($_POST['insert_passageiro']))
		{
	//pegando os valores de entrada
			$nm_passageiro = $_POST['nm_passageiro'];
			$dt_passageiro = $_POST['dt_passageiro'];
			$cpf_passageiro = $_POST['cpf_passageiro'];
			$sexo_passageiro = $_POST['sexo_passageiro'];

	//definindo query
			$insere_passageiro = "INSERT INTO `passageiro`(`nm_passageiro`,`dt_nascimento`, `id_cpf`, `ds_sexo`)VALUES ('$nm_passageiro','$dt_passageiro',$cpf_passageiro,$sexo_passageiro)";

			$resp_passageiro = $mysqli->query($insere_passageiro) or die ($mysqli->error);

			//fazendo o encerramento
			if($resp_passageiro)
	   		{
	        	echo 'Passageiro cadastrado';
	    	}
	    	else{
	        	echo 'Passageiro não cadastrado';
	    	}
		}
?>
<div class="container">
	  <h2 class="page-header">Cadastrar passageiro</h2>
	<div class="d-flex flex-colun justify-content-center">
		<form method="post">			

	            <input type="text" class="form-control" name="nm_passageiro" required placeholder="Nome do passageiro">
			
	            <input type="number" class="form-control" name="dt_passageiro"  required placeholder="Nascimento YYYY/MM/DD" min="11110101">
	        
	            <input type="number" class="form-control" name="cpf_passageiro" required placeholder="CPF - apenas números" min="0" max="99999999999">
	        
	            <input type="number" class="form-control" name="sexo_passageiro" required placeholder="Sexo 0 fem 1 mas" min="0" max="1">
	        

	            <input type="submit" class="form-control" name="insert_passageiro" value="Cadastrar Passageiro">
	    	  
	    </form>
	</div>
</div>
</body>
</html>
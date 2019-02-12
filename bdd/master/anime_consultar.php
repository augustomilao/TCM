<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Cadastro de Agenda - SCA</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="navbar.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" media="screen" href="estilo.css">
		<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">

	</head>
	<header style="border-bottom: 2px solid black;text-align:left;">

<div id="navbar" class="navbar-collapse collapse">
															<ul class="nav navbar-nav">
																			<li class="btn-hover">
																							<a href="#" class=>Clientes</a>
																			</li>
																			<li>
																							<a href="#an" class=>Animes</a>
																			</li>
																			<li>
																							<a href="#ma" class=>Sugestões</a>
									</li>
									<li>
																							<a href="#ma" class=>Sair</a>
																			</li>
	</div>
	</header>

  <body onLoad="checar('consultar');">
	<form name="form1" method= "POST" action="#">
		<input type="hidden" name="nome1" id="nome1" value="<?php echo $_POST['nome']; ?>" />
        <input type="hidden" name="genero1" id="genero1" value="<?php echo $_POST['genero']; ?>">
        <input type="hidden" name="episodio1" id="episodio1" value="<?php echo $_POST['episodio']; ?>" />
        <input type="hidden" name="datalanc1" id="datalanc1" value="<?php echo $_POST['datalanc']; ?>">
		
		<input type="hidden" name="acao" id="acao"/>
	</form>
	
    <div class="container" style="padding-top:20px">
		
		
	  
      <div class="jumbotron" style ='font-size:16px'>
		<?php 
				include "conexao.php";
				
				

				$result = NULL;
				$acao = NULL;
				$query = NULL;  
				
				if(isset($_POST["cancelar"])){	
				  echo "<script>location.href='master.php';</script>";
				}
				 
				if(isset($_POST["acao"])){
					switch ($_POST["acao"]){
						case "consultar":
							$nome = $_POST["nome1"];
							$genero= $_POST["genero1"];
							$query = mysqli_query($cnn,"SELECT * FROM animes WHERE nome = '$nome' and genero = '$genero'") or die(mysql_error());       
							$result = mysqli_num_rows($query);
							if($result == 0){
								echo "<script> alert('Anime não Cadastrado!!'); </script>";
								echo "<script> window.location='mastera.php';</script>"; 					
							}
							else{
								$registro = mysqli_fetch_row($query);
								$id = $registro[0];
								$nome = $registro[1];
								$genero = $registro[2];
								$episodio = $registro[3];
								$datalanc = $registro[4];
								?>
									
						  <div id="tudo" style="border:2px black solid; margin: 80px 20%; padding-bottom: 20px ">
								<form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Consulta de Anime!</h2>
								
								<label for="inputNome"><strong>Nome:</strong></label>
								<input type="text" name="nome" id="nome" class="form-control" style ='width:auto;text-align:center' value="<?php echo $nome;?>" readonly /></br><br>
								<label for="inputGenero"><strong>Gênero:</strong></label>
								<input type="text" name="genero" id="genero" class="form-control" style ='width:auto;text-align:center' value="<?php echo $genero;?>" readonly /></br><br>	
								<label for="inputEpisodio"><strong>Episódio:</strong></label>
								<input type="text" name="episodio" id="episodio" class="form-control" style ='width:150px;text-align:center' value="<?php echo $episodio;?>" readonly /></br><br>
								<label for="inputDatalanc"><strong>Data de Lançamento:</strong></label>
								<input type="text" name="datalanc" id="datalanc" class="form-control" style ='width:150px;text-align:center' value="<?php echo $datalanc;?>" readonly /></br><br>		

								<button  type="submit" name="cancelar" id="cancelar" style ='width:auto'/>Retornar</button>
								
							  </form>	
							</div>
							  
								<?php
							}						
					}
				}							
								?>						
     </div>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<script src="js/ie-emulation-modes-warning.js"></script>
<script type="text/javascript" language="javascript">
	function checar(e){
		document.form1.acao.value = e;
		document.form1.submit();
	}
</script>
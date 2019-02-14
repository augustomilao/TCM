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
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
  </head>

  <header style="border-bottom: 2px solid black;text-align:left;">

	<div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                        <li class="btn-hover">
                                                <a href="#" class=>Novo</a>
                                        </li>
                                        <li>
                                                <a href="sugestaon.php" class=>Alterar</a>
                                        </li>
										<li>
                                                <a href="#" class=>Sair</a>
                                        </li>
    </div>
    </header>

  <body onLoad="checar('consultar');">
	<form name="form1" method= "POST" action="#">
		<input type="hidden" name="nome1" id="nome1" value="<?php echo $_POST['nome']; ?>" />
        <input type="hidden" name="sugestao1" id="sugestao1" value="<?php echo $_POST['sugestao']; ?>">
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
				  echo "<script>location.href='sugestao.php';</script>";
				}
				 if(isset($_POST["sub1"])){
                    $id = NULL;
					$nome = $_POST["nome"];
					$sugestao = $_POST["sugestao"];
					$query = mysqli_query($cnn,"INSERT INTO mangas VALUES ('$id','$nome','$sugestao')");
					echo "<script>alert('Sugestão enviada!!');</script>";
					}


				if(isset($_POST["acao"])){
					switch ($_POST["acao"]){
						case "consultar":
							$nome = $_POST["nome1"];
							$sugestao = $_POST["sugestao1"];
							$query = mysqli_query($cnn,"SELECT * FROM mangas WHERE nome = '$nome'") or die(mysql_error());       
							$result = mysqli_num_rows($query);
							if($result == 0){?>
								<form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Novas Sugestões!</h2>
								
								<label for="inputNome"><strong>Nome:</strong></label>
								<input type="text" name="nome" id="nome" class="form-control" style ='width:auto;text-align:center'  /></br><br>
								<label for="inputSugestao"><strong>Sugestão:</strong></label>
								<input type="text" name="sugestao" id="sugestao" class="form-control" style ='width:auto;text-align:center'  /></br><br>	
								

								<button  type="submit" name="cancelar" id="cancelar" style ='width:auto'/>Retornar</button>
								<button type="submit" id="sub1" name="sub1" value="Enviar">Enviar</button>
								
								</form>	
								<?php
							}
							else{
                                $registro = mysqli_fetch_row($query);
                                $id = $registro[0];
								$nome = $registro[1];
								$sugestao = $registro[2];
								?>
									
						  <div id="tudo" style="border:2px black solid; margin: 80px 20%; padding-bottom: 20px ">
								<form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Obrigado pela sugestão!</h2>
								
								<label for="inputNome"><strong>Nome:</strong></label>
								<input type="text" name="nome" id="nome" class="form-control" style ='width:auto;text-align:center' value="<?php echo $nome;?>" readonly /></br><br>
								<label for="inputSugestao"><strong>Sugestão:</strong></label>
								<input type="text" name="genero" id="genero" class="form-control" style ='width:auto;text-align:center' value="<?php echo $sugestao;?>" readonly /></br><br>	
								<label for="inputId"><strong>Código (Anote) :</strong></label>
								<input type="text" name="id" id="id" class="form-control" style ='width:150px;text-align:center' value="<?php echo $id;?>" readonly /></br><br>									
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
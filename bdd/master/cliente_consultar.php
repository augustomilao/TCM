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

  </head>

  <body onLoad="checar('consultar');">
	<form name="form1" method= "POST" action="#">
		<input type="hidden" name="login1" id="login1" value="<?php echo $_POST['login']; ?>" />
		<input type="hidden" name="acao" id="acao"/>
	</form>
	
    <div class="container">
		

	  
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
							$login = $_POST["login1"];
							$query = mysqli_query($cnn,"SELECT * FROM acesso WHERE login = '$login'") or die(mysql_error());       
							$result = mysqli_num_rows($query);
							if($result == 0){
								echo "<script> alert('Usuário não Cadastrado!!'); </script>";
								echo "<script> window.location='usuario.php';</script>"; 					
							}
							else{
								$registro = mysqli_fetch_row($query);
								$login = $registro[0];
								$senha = $registro[1];
								$privilegio = $registro[2];
								?>
									
						  <div id="tudo" style="border:2px black solid; margin: 80px 20%; padding-bottom: 20px ">
								<form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Consulta de Dados</h2>
								
								<label for="inputLogin"><strong>Login:</strong></label>
								<input type="text" name="login" id="login" class="form-control" style ='width:auto;text-align:center' value="<?php echo $login;?>" readonly /></br><br>
								<label for="inputEvento"><strong>Senha:</strong></label>
								<input type="password" name="senha" id="senha" class="form-control" style ='width:auto;text-align:center' value="<?php echo $senha;?>" readonly /></br><br>	
								<label for="inputEvento"><strong>Privilégio:</strong></label>
								<input type="text" name="privilegio" id="privilegio" class="form-control" style ='width:150px;text-align:center' value="<?php echo $privilegio;?>" readonly /></br><br>		

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
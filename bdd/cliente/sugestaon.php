<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Configurações de usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
    <header style="border-bottom: 2px solid black;text-align:left;">

	<div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                        <li class="btn-hover">
                                                <a href="#" class=>Nova Sugestão</a>
                                        </li>
                                        <li>
                                                <a href="#" class=>Alterar Sugestão</a>
										</li>
										<li>
                                                <a href="../../indexcadastrado.php" class=>Sair</a>
                                        </li>
    </div>
	</header>
	
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
					$id = $_POST["id"];
					$nome = $_POST["nome"];
					$sugestao = $_POST["sugestao"];
					$query = mysqli_query($cnn,"INSERT INTO manga VALUES ('$id','$nome','$sugestao')");
					echo "<script>alert('Obrigado pela sugestão!!');</script>";
					}


				if(isset($_POST["acao"])){
					switch ($_POST["acao"]){
						case "consultar":
							$nome = $_POST["nome1"];
							$query = mysqli_query($cnn,"SELECT * FROM manga WHERE nome = '$nome'") or die(mysql_error());       
							$result = mysqli_num_rows($query);
							if($result == 0){?>
								<form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 style="text-align:center">Sua sugestão!!</h2>
								<center>
								<label for="inputNome"><strong>Nome:</strong></label>
								<input type="text" name="nome" id="nome" class="form-control" style ='width:auto;text-align:center' /></br><br>
								<label for="inputSugestao"><strong>Sugestão:</strong></label>
								<input type="text" name="sugestao" id="sugestao" class="form-control" style ='width:auto;text-align:center' /></br><br>	
                                	

								<button  type="submit" name="cancelar" id="cancelar" style ='width:auto'/>Retornar</button>
								<button type="submit" id="sub1" name="sub1" value="Enviar">Enviar</button>
								</center>
								</form>	
								<?php
							}
							else{
								$registro = mysqli_fetch_row($query);
								$id = $registro[0];
								$nome = $registro[1];
								$sugestao = $registro[2];
								?>
							<center>		
						  <div id="tudo" style="border:2px black solid; margin: 80px 20%; padding-bottom: 20px ">
								<form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Anote o Código de sua sugestão! Obrigado pelo Feedback!</h2>
								<center>
								<label for="inputNome"><strong>Nome:</strong></label>
								<input type="text" name="nome" id="nome" class="form-control" style ='width:auto;text-align:center' value="<?php echo $nomes;?>" readonly /></br><br>
								<label for="inputSugestao"><strong>Sugestão:</strong></label>
								<input type="text" name="sugestao" id="sugestao" class="form-control" style ='width:auto;text-align:center' value="<?php echo $sugestao;?>" readonly /></br><br>	
								<label for="inputId"><strong>Código da mensagem:</strong></label>
								<input type="text" name="id" id="id" class="form-control" style ='width:150px;text-align:center' value="<?php echo $id;?>" readonly /></br><br>									
								<button  type="submit" name="cancelar" id="cancelar" style ='width:auto'/>Retornar</button>
								</center>
							  </form>	
							</div>
							</center>  
								<?php
							}						
					}
				}							
								?>						
	 </div>
	 
	</div>
	<section class="tudo" style="background-image: linear-gradient(#cb356b, #bd3f32)">

<h1>Informe sua Sugestão!</h1>
<Form name="form1" method="POST" action="#">
<input class="barra" type="text" name="nome" placeholder="Seu nome" size=60>
<input class="barra" type="text" name="genero" placeholder="Gênero" size=60>
<br>
<br>

<div id=botaos>
<input type="button" style="width:110px" onclick="f_incluir()" name=fincluir value="Incluir">

<input type="button" style="width:110px" onclick="f_excluir()" name=fexcluir value="Excluir">

<input type="button" style="width:110px" onclick="f_alterar()" name=falterar value="Alterar">

<input type="button" style="width:110px" onclick="f_consultarr()" name=fconsultar value="Consultar">
</div>
<br>
<br>

</section>

    



</body>
</html>
<script src="js/ie-emulation-modes-warning.js"></script>
<script type="text/javascript" language="javascript">
	function f_incluir(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN e/ou o Campo SENHA");
			}
			else{
				document.form1.action = "cliente_incluir.php";
				document.form1.submit();
			}
		}

		function f_excluir(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN e/ou o Campo SENHA");
			}
			else{
				document.form1.action = "usuario_excluir.php";
				document.form1.submit();
			}
		}

		function f_alterar(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN e/ou o Campo SENHA");
			}
			else{
				document.form1.action = "cliente_alterar.php";
				document.form1.submit();
			}
		}
		
		function f_consultarr(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN");
			}
			else{
				document.form1.action = "cliente_consultar.php";
				document.form1.submit();
			}
		}
		
</script>
<?php

?>
<?php
session_start();
if(($_SESSION['pri'] == "Master"|| $_SESSION ['pri'] == "Comum") && $_SESSION['acesso'] ==1){
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
                                                <a href="userc.php" class=>Clientes</a>
                                        </li>
                                        <li>
                                                <a href="mastera.php" class=>Animes</a>
                                        </li>
                                        <li>
                                                <a href="#ma" class=>Sugestões</a>
										</li>
										<li>
                                                <a href="#ma" class=>Sair</a>
                                        </li>
    </div>
    </header>

    <section class="tudo" style="background-image: linear-gradient(#cb356b, #bd3f32)">

    <h1>Informe seu Login</h1>
    <Form name="form1" method="POST" action="#">
    <input class="barra" type="text" name="login" placeholder="Login" size=60>
    <br>
    <br>

    <div id=botaos>
    <input type="button" style="width:110px" onclick="f_incluir()" name=fincluir value="Incluir">

    <input type="button" style="width:110px" onclick="f_excluir()" name=fexcluir value="Excluir">
   
    <input type="button" style="width:110px" onclick="f_consultarr()" name=fconsultar value="Consultar">

    <input type="button" style="width:110px" onclick="f_alterar()" name=falterar value="Alterar">
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
				document.form1.action = "Cliente_excluir.php";
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
}
else{
	echo "<script> window.location='../loginAcePirates.php';</script>"; 
}
?>
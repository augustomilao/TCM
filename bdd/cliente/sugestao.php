<?php
session_start();
if(($_SESSION['pri'] == "Usuario"|| $_SESSION ['pri'] == "Comum") && $_SESSION['acesso'] ==1){
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
                                                <a href="sugestaoincluir.php" class=>Nova Sugestão</a>
                                        </li>
                                        <li>
                                                <a href="sugestaoconsultar.php" class=>Consultar Sugestão</a>
										</li>
										<li>
                                                <a href="../../indexcadastrado.php" class=>Sair</a>
                                        </li>
    </div>
    </header>


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
}
else{
	echo "<script> window.location='../loginAcePirates.php';</script>"; 
}
?>
<?php
//inicio de sessão
    session_start();
    $_SESSION['acesso'] = 1;
//abre o bdd
    include "conexao.php";

//Variaveis
    $result = NULL;
    $acao = NULL;
    $query = NULL;
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $query = mysqli_query($cnn,"SELECT * FROM acesso WHERE login = '$login' AND senha = '$senha'");
    $result = mysqli_num_rows($query);
    if($result == 0){
        unset($_SESSION['pri']);
        echo "<script> alert('Usuário e/ou Senha errados!');</script>";
        echo "<script> window.location='loginAcePirates.php';</script>";
    }
        else{
            $registro = mysqli_fetch_row($query);
            $login = $registro[0];
            $senha = $registro[1];
            $privilegio = $registro[2];
            if($privilegio=="Master"){
                $_SESSION['pri'] = $privilegio;
                echo "<script> alert('Bem vindo ao Sistema,Mestre!');</script>";
                echo "<script> window.location='master/master.php';</script>";
            }
            else{
                if($privilegio=="Comum"){
                    $_SESSION['pri'] = $privilegio;
                    echo "<script> alert('Bem vindo ao Sistema,Funcionario!');</script>";
                    echo "<script> window.location='funcionario/user.php';</script>";
            }
            else{
            if
                ($privilegio=="Usuario"){
                    $_SESSION['pri'] = $privilegio;
                    echo "<script> alert('Bem vindo de volta!!');</script>";
                    echo "<script> window.location='../indexcadastrado.php';</script>";
            }
            
        } 
    }
} 
        
        ?>
<?php
// Variaveis
    $cnn = NULL;
    $banco = NULL;
    $resultado= NULL;

//Conexão com o Banco de Dados  (porta,user,senha)
    $cnn = mysqli_connect('localhost','root','');
//Selecionar o banco de dados
    $banco = mysqli_select_db($cnn,'cad_agenda');
//Selecionar linguagem de acentuação
    mysqli_set_charset($cnn,'utf8');



//mysqli_query,,,mysqli_num_rows
?>
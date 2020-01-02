<?php

    $conexao = mysql_connect("localhost","root",""); //abre a conexao com banco
    if(!$conexao){
    	echo "Erro ao se conectar ao banco";
    	exit;
    }

    $banco = mysql_select_db("garantia"); // seleciona o banco a ser usado
    if(!$banco){
    	echo "Erro ao se conectar com o banco trabalho";
    	exit;
    }

    $cod = trim($_POST['txtCod']);
    $nome = trim($_POST['txtNome']);
    $cpf = trim($_POST['txtCPF']);
    $telefone = trim($_POST['txtTelefone']);
      
    
    $sql = "INSERT INTO clientes (cod, nome, cpf, telefone) VALUES ('$cod','$nome','$cpf', '$telefone');";
         
    $ins = mysql_query($sql); // comando para inserir no banco

    header("location:index.html");

?>
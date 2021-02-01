<?php
session_start();
include('conexao.php');

if( empty($_POST['email_cadastro']) || empty($_POST['senha_cadastro']) ){
    header('Location: index.php');
}

$nome = mysqli_real_escape_string($con, $_POST['nome_cadastro']);
$email = mysqli_real_escape_string($con, $_POST['email_cadastro']);
$senha = mysqli_real_escape_string($con, $_POST['senha_cadastro']);

$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$query_insert = "INSERT INTO usuarios(nome, email, senha, data_hora) VALUES ('$nome', '$email', md5('$senha'), now())";

$select_result = mysqli_query($con, $query_select);

$row = mysqli_num_rows($select_result);

header('Location: index.php');

if($row == 0){
    mysqli_query($con, $query_insert);
    $_SESSION['email_nao_cadastrado'] = true;
    exit();
} else {
    $_SESSION['email_existente'] = true;
    exit();
}



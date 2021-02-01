<?php
session_start();
include('conexao.php');

if( empty($_POST['email_esqueceu_senha']) ){
    header('Location: index.php');
}

$email = mysqli_real_escape_string($con, $_POST['email_esqueceu_senha']);

$query_select = "SELECT email FROM usuarios WHERE email = '$email'";

$select_result = mysqli_query($con, $query_select);

$row = mysqli_num_rows($select_result);

header('Location: esqueceu_senha.php');

if($row == 0){
    $_SESSION['email_nao_cadastrado'] = true;
    exit();
} else {
    $_SESSION['email_enviado'] = true;
    include('envia_email.php');
    exit();
}



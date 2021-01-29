<?php
session_start();
include('conexao.php');

if( empty($_POST['email_login']) || empty($_POST['senha_login']) ){
    header('Location: index.php');
}

$email = mysqli_real_escape_string($con, $_POST['email_login']);
$senha = mysqli_real_escape_string($con, $_POST['senha_login']);

$query = "SELECT nome, email, senha FROM usuarios WHERE email = '$email' AND senha = md5('$senha')";

$result = mysqli_query($con, $query);

if ($result) {
    while ($row = $result->fetch_row()) {
        $nome = $row[0];

        if($nome == null){
            $nome = $email;
        }
        
    }
}

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    header('Location: painel.php');
    exit();
} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}

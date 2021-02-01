<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Esqueceu sua senha?</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="content first-content forgot-password">

            <div class="first-column full">

                <h2 class="title title-primary">esqueceu sua senha?</h2>

                <p class="description description-primary">digite seus dados:</p>

                <form action="esqueceu_senha_query.php" class="form" method="POST">
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email_esqueceu_senha" placeholder="Email">
                    </label>

                    <button class="btn btn-primary">recuperar senha</button>        
                </form>
                
                <?php if( isset($_SESSION['email_nao_cadastrado']) ): ?>
                    <p class="fail-login">E-mail não encontrado</p>
                <?php 
                    unset($_SESSION['email_nao_cadastrado']);
                    endif; 
                ?>

                <?php if( isset($_SESSION['email_enviado']) ): ?>
                    <p class="sucess-login">Nova senha enviado para o seu e-mail!</p>
                <?php 
                    unset($_SESSION['email_enviado']);
                    endif; 
                ?>

                <a class="entrar" href="index.php">Acessar sua conta</a>

            </div><!-- second column -->

        </div>

    </div>

    <script src="main.js"></script>
</body>
</html>
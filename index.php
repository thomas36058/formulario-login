<?php
session_start();
unset($_SESSION['email_nao_cadastrado']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tela de Login</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="content first-content">

            <div class="first-column">

                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Para acessar sua conta</p>
                <p class="description description-primary">por favor entre com suas informações</p>
                <button id="signin" class="btn btn-primary">entrar</button>

            </div>    

            <div class="second-column">

                <h2 class="title title-second">crie uma conta</h2>

                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->

                <p class="description description-second">ou use seu email para se cadastrar:</p>

                <form action="cadastro.php" class="form" method="POST">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome_cadastro" placeholder="Nome">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email_cadastro" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha_cadastro" placeholder="Senha">
                    </label>
                    
                    <?php if( isset($_SESSION['email_existente']) ): ?>
                        <p class="fail-login">E-mail ja cadastrado!</p>
                    <?php 
                        unset($_SESSION['email_existente']);
                        endif; 
                    ?>
                    
                    <?php if( isset($_SESSION['email_nao_cadastrado']) ): ?>
                        <p class="sucess-login">Usuário cadastrado com sucesso!</p>
                        <?php 
                        unset($_SESSION['email_nao_cadastrado']);
                        endif; 
                    ?>

                    <button class="btn btn-second">cadastrar</button>        
                </form>

            </div><!-- second column -->

        </div><!-- first content -->

        <div class="content second-content">

            <div class="first-column">

                <h2 class="title title-primary">Olá!</h2>
                <p class="description description-primary">Digite seus dados pessoais</p>
                <p class="description description-primary">e se junte a nós</p>
                <button id="signup" class="btn btn-primary">se cadastrar</button>

            </div>

            <div class="second-column">
                <h2 class="title title-second">entrar</h2>

                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->

                <p class="description description-second">ou use seu email:</p>

                <form action="login.php" class="form" method="POST">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email_login" placeholder="E-mail">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha_login" placeholder="Senha">
                    </label>
                
                    <a class="password" href="esqueceu_senha.php">esqueceu sua senha?</a>

                    <?php if( isset($_SESSION['nao_autenticado']) ): ?>
                        <p class="fail-login">Usuário ou senha inválido</p>
                    <?php 
                        unset($_SESSION['nao_autenticado']);
                        endif; 
                    ?>

                    <button class="btn btn-second">acessar</button>
                </form>

            </div><!-- second column -->

        </div><!-- second-content -->

    </div>

    <script src="main.js"></script>
</body>
</html>
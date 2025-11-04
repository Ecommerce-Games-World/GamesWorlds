<?php
    require '../php/login_correto.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesWorlds</title>
    <link rel="shortcut icon" href="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="../css/desktop.css">
    <link rel="stylesheet" href="../css/tablet.css">
    <link rel="stylesheet" href="../css/mobile.css">
    
    <style>
        :root {
            
            /* Cores */
            --red: #D31621;
            --white: #FAF3E9; 
            --gray: #D9D9D9;
            --black: #190709;
            --beige: #E7B59D;
            
            /* Fontes */
            /* 
            --inter: ;
            --interBold: ;
            --interBlack:;
            */
            
        }
        
        /* Organizar todo o site */
        .container {
            display: flex;
            flex-flow: nowrap row;
            justify-content: space-between;
            
            width: 100%;
            height: 100%;
            min-height: 900px;
        }

        /* Fundo Lateral */
        aside {
            width: 50vw;
            margin: 0;    
            background-color: var(--black);
            clip-path: ellipse(80% 100% at 10% 50%);
        } 
    
        /* icone do site */
        aside img {
            margin: 50px 0 0 7vw;
        }
    
        /* Div do Login completo */
        .login {
            display: flex;
            flex-flow: nowrap column;
            
            width: 100vw;
            max-width: 600px;
            height: 650px;
            margin: auto;
            
            color: var(--white);
            background-color: var(--red);
            border-radius: 30px;
        }

        @media screen and (min-width: 1084px) {
            .login {
                margin-right: 10%;
            }
        }
        /* Espaçamento da logo e texto em relação a div */
        .espacamentoLogo {
            display: flex;
            justify-content: left;
            margin: 60px 0px 50px 15%;
        }
    
        /* Organização da logo e texto */
        .containerLogo {
            display: grid;
            grid-template: repeat(2, 1fr) / 50px 1fr;
            gap: 3px;
        }

        /* Posição da imagem no grid */
        .containerLogo a {
            grid-area: 1 / 1 / 3 / 2;
        }

        /* Formulário de login, alinhando os elementos */
        .formLogin {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
            gap: 35px;

            position: relative;
        }

        /* Input do Formulário */
        .formLogin input {
            width: 20vw;
            min-width: 400px;
            padding: 10px 5px 10px 30px;
            
            border: none;
            border-radius: 20px;
        }
        
        /* Div para fazer um legend improvisado */
        .formLogin div {
            position: relative;
            margin: 15px auto;
        }

        /* Legend Improvisado */
        .formLogin div > label {
            position: absolute;
            bottom: 75%;
            left: 5%;

            width: 70px;
            padding: 2px;
            margin-left: 10px;

            background-color: var(--red);
            text-align: center;
            font-size: 13px;
            border-radius: 20px;
        }

        /* Botão para enviar o formulário */
        .entrar {
            width: 200px;
            padding: 12px;

            color: var(--white);
            background-color: var(--black);

            border: none;
            border-radius: 20px;
        }

        /* animação de passar o mouse encima do botão */
        .entrar:hover {
            color: var(--black);
            background-color: var(--white);
            transition: scale .3s;
            scale: 1.1;
            cursor: pointer;
        }

        /* Organizando a posição do recuperar senha e cadastro */
        .containerLink {
            display: flex;
            flex-flow: nowrap column;
            margin-top: 60px;
        }

        /* Personalizando os links */
        a {
            color: var(--white);
            text-align: center;
            padding-bottom: 15px;
        }

        a:hover {
            color: var(--beige);
            cursor: pointer;
        }

        /* MOBILE */
        @media screen and (min-width: 0px) and (max-width: 767px){
            body {
                background-color: var(--black);
            }

            /* Organizar todo o site */
            .container {
                justify-content: center;
            }

            /* Lateral */
            aside {
                display: none;
            }

            /* Div do Login completo */
            .login {
                width: 75vw;
                min-width: 450px;
            }
        }

        /* TABLET */
        @media screen and (min-width: 768px) and (max-width: 1024px) {
            /* Fundo Lateral */
            aside {
                width: 60vw;
            } 
        
            /* Div do cadastro completo */
            .login {
                width: 70vw;
                min-width: 600px;
                margin-right: 50px;
            }

            /* Espaçamento entre o texto e imagem em relação a div */
            .espacamentoLogo {
                display: flex;
                justify-content: left;
                margin: 60px 0px 30px 15%;
            }

            /* Formulário do cadastro, organizando as informações */
            .formLogin {
                justify-content: center;
                align-items: center;
                gap: 17px;
                position: relative;
            }

            /* Inputs do formulário */
            .formLogin input {
                width: 40vw;
                padding: 10px 5px 10px 30px;
            }

            /* Requisitos para o cadastro */
            .required {
                display: none;
            }
        }
    </style>
</head>
<body>
    
    <div class="container">
        <!-- Fundo Lateral -->
        <aside>
            <a href="main.php"><img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand"></a>
        </aside>
        
        <!-- Div em volta do login -->
        <div class="login">
            <div class="espacamentoLogo">
                <div class="containerLogo">
                    <a href="main.php"><img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand" style="opacity: 100%;"></a>
                    <h2>Games Worlds</h2>
                    <p>Faça seu Login</p>
                </div>
            </div>

            <!-- Formulário de Login -->
            <form action="" method="POST" class="formLogin">
                <div>
                    <label for="nomeUsuario">Nome</label>
                    <input type="text" name="nomeUsuario" id="nomeUsuario">
                </div>
                <div>
                    <label for="senhaUsuario">Senha</label>
                    <input type="password" name="senhaUsuario" id="senhaUsuario">
                </div>
                <button type="submit" name="entrar" class="entrar">Entrar</button>
                
            </form>

            <!-- Links de cadastro e esqueci a senha -->
            <div class="containerLink">
                <a href="cadastro.php">Ainda não tenho uma conta. Cadastrar-se</a>
                <a href="esqueciSenha.php">Esqueci a Senha.</a>
            </div>
        </div>
    </div>
</body>
</html>
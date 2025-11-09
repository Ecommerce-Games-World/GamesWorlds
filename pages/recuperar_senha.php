<?php
    require '../php/usuario_existe.php';
?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesWorlds</title>
    <link rel="shortcut icon" href="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" type="image/x-icon">
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
    
        /* Div do cadastro completo */
        .login {
            display: flex;
            flex-flow: nowrap column;
            
            width: 50vw;
            max-width: 600px;
            height: 90vh;
            max-height: 650px;
            margin: auto;
            
            color: var(--white);
            background-color: var(--red);
            border-radius: 30px;
        }

        /* Espaçamento entre o texto e imagem em relação a div */
        .espacamentoLogo {
            display: flex;
            justify-content: left;
            margin: 60px 0px 30px 15%;
        }
        
        /* Posição da logo e texto */
        .containerLogo {
            display: grid;
            grid-template: repeat(2, 1fr) / 50px 1fr;
            gap: 3px;
        }

        /* Posição da imagem no grid */
        .containerLogo a {
            grid-area: 1 / 1 / 3 / 2;
        }
 
        /* Formulário do cadastro, organizando as informações */
        .formCadastro {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
            gap: 17px;
            position: relative;
        }
        
        /* Inputs do formulário */
        .formCadastro input {
            width: 50vw;
            max-width: 380px;
            padding: 10px 5px 10px 30px;
            /* margin: 10px 0; */

            border: none;
            border-radius: 20px;
        }
        
        /* Div para fazer um legend improvisado */
        .formCadastro div {
            position: relative;
            margin: 15px auto;
        }

        /* Legend improvisado */
        .formCadastro div > label {
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

        /* Botão para registrar */
        .recuperar {
            width: 200px;
            padding: 12px;
            margin: 30px auto 20px auto;

            color: var(--white);
            background-color: var(--black);

            border: none;
            border-radius: 20px;
        }

        /* Animação ao passar o mouse em cima do botão de registrar */
        .recuperar:hover {
            color: var(--black);
            background-color: var(--white);
            transition: scale .3s;
            scale: 1.1;
            cursor: pointer;
        }

        /* Links */
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

            /* Fundo Lateral */
            aside {
                display: none;
            } 
        
            /* Div do cadastro completo */
            .login {
                width: 85vw;
            }
        
            /* Inputs do formulário */
            .formCadastro input {
                width: 60vw;
            }
        }

        /* TABLETS */
        @media screen and (min-width: 768px) and (max-width: 1084px){

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
            .formCadastro {
                display: flex;
                flex-flow: column nowrap;
                justify-content: center;
                align-items: center;
                gap: 17px;
                position: relative;
            }

            /* Inputs do formulário */
            .formCadastro input {
                width: 40vw;
                min-width: 380px;
                padding: 10px 5px 10px 30px;
                /* margin: 10px 0; */

                border: none;
                border-radius: 20px;
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

        <div class="login">
            <div class="espacamentoLogo">
                <div class="containerLogo">
                    <a href="main.php"><img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand" style="opacity: 100%;"></a>
                    <h2>Games Worlds</h2>
                    <p>Recupere sua senha </p>
                </div>
            </div>

            <!-- Formulário de Cadastro -->
            <form action="" method="POST" class="formCadastro">
                <div>
                    <label for="nomeRecuperar">Nome</label>
                    <input type="text" name="nomeRecuperar" id="nomeRecuperar" placeholder="Ronaldo">
                </div>
                
                <div>
                    <label for="emailRecuperar">Email</label>
                    <input type="email" name="emailRecuperar" id="emailRecuperar" placeholder="abcde@gmail.com">
                </div>
                <div>
                    <label for="telefoneRecuperar">Telefone</label>
                    <input type="tel" name="telefoneRecuperar" id="telefoneRecuperar" placeholder="11 1234-5678">
                </div>
                
                <button type="submit" name="recuperar" class="recuperar">Recuperar</button>
            </form>
        </div>
    </div>
</body>
</html>
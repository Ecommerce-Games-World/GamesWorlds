<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesWorlds</title>
    <link rel="shortcut icon" href="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/desktop.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    
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
        
        .container {
            display: flex;
            flex-flow: nowrap row;
            justify-content: space-between;
            
            width: 100%;
            height: 100%;
            min-height: 900px;
        }

        aside {
            width: 50vw;
            margin: 0;    
            background-color: var(--black);
            clip-path: ellipse(80% 100% at 10% 50%);
        } 
    
        aside img {
            margin: 50px 0 0 7vw;
        }
    
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

        .espacamentoLogo {
            display: flex;
            justify-content: left;
            margin: 60px 0px 50px 15%;
        }
        
        .containerLogo {
            display: grid;
            grid-template: repeat(2, 1fr) / 50px 1fr;
            gap: 3px;
        }

        .containerLogo img {
            grid-area: 1 / 1 / 3 / 2;
        }
 
        .formLogin {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
            gap: 35px;

            position: relative;
        }
        
        .formLogin input {
            width: 20vw;
            min-width: 400px;
            padding: 10px 5px 10px 30px;
            
            border: none;
            border-radius: 20px;
        }
        

        .formLogin div {
            position: relative;
            margin: 15px auto;
        }

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

        .entrar {
            width: 200px;
            padding: 12px;

            color: var(--white);
            background-color: var(--black);

            border: none;
            border-radius: 20px;
        }

        .containerLink {
            display: flex;
            flex-flow: nowrap column;
            margin-top: 60px;
        }

        .entrar:hover {
            color: var(--black);
            background-color: var(--white);
            transition: scale .3s;
            scale: 1.1;
            cursor: pointer;
        }

        a {
            color: var(--white);
            text-align: center;
            padding-bottom: 15px;
        }

        a:hover {
            color: var(--beige);
            cursor: pointer;
        }

        </style>
</head>
<body>
    <div class="container">
        <aside>
            <a href="main.php"><img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand"></a>
        </aside>
        
        <div class="login">
            <div class="espacamentoLogo">
                <div class="containerLogo">
                    <img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand" style="opacity: 100%;">
                    <h2>Games Worlds</h2>
                    <p>Faça seu Login</p>
                </div>
            </div>
            <form action="" method="post" class="formLogin">
                <div>
                    <label for="nomeUsuario">Nome</label>
                    <input type="text" name="nomeUsuario" id="nomeUsuario">
                </div>
                <div>
                    <label for="senhaUsuario">Senha</label>
                    <input type="password" name="senhaUsuario" id="senhaUsuario">
                </div>
                <button class="entrar">Entrar</button>
                
            </form>
            <div class="containerLink">
                <a href="cadastro.php">Ainda não tenho uma conta. Cadastrar-se</a>
                <a href="esqueci_senha.php">Esqueci a Senha.</a>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>
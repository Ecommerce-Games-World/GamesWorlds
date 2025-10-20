<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesWorlds</title>
    <link rel="shortcut icon" href="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/desktop.css">
    
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
            
            width: 100vw;
            height: 100vh;

        }

        aside {
            width: 50vw;
            margin: 0;    
            background-color: var(--black);
            clip-path: ellipse(80% 100% at 10% 50%);
        } 
    
        aside img {
            margin: 50px auto auto 200px;
        }
    
        .login {
            display: flex;
            flex-flow: nowrap column;
            
            width: 100vw;
            max-width: 600px;
            height: 870px;
            margin: auto 200px;
            
            padding: 60px 100px;
            
            color: var(--white);
            background-color: var(--red);
            border-radius: 30px;
        }
        
        .containerLogo {
            display: grid;
            grid-template: repeat(2, 1fr) / 50px 1fr;
            gap: 3px;
            margin-bottom: 30px;
        }

        .containerLogo img {
            grid-area: 1 / 1 / 3 / 2;
        }
 
        .formCadastro {
            display: grid;
            position: relative;
        }
        
        .formCadastro input {
            width: 400px;
            padding: 10px 5px 10px 30px;
            margin: 10px 0;
            
            border: none;
            border-radius: 20px;
        }
        

        .formCadastro div {
            position: relative;
            margin: 15px auto;
        }

        .formCadastro div > label {
            position: absolute;
            bottom: 42px;
            left: 20px;

            width: 70px;
            padding: 2px;
            margin-left: 10px;

            background-color: var(--red);
            text-align: center;
            font-size: 13px;
            border-radius: 20px;
        }

        .register {
            width: 200px;
            padding: 12px;
            margin: 30px auto 20px auto;

            color: var(--white);
            background-color: var(--black);

            border: none;
            border-radius: 20px;
        }

        .register:hover {
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

        .required {
            width: 400px;
            height: 400px;
            margin: 100px 0px 0px 200px;
            background-color: var(--red);
            border-radius: 20px;
        }

        .required h2 {
            padding: 30px;
        
            color: var(--white);
            text-align: center;
        }

        .required ul {
            display: flex;
            flex-flow: nowrap column;
            justify-content: center;
            align-items: center;
            gap: 40px;

            margin-top: 20px;

            color: var(--white);
            text-align: center;
            list-style-type: circle;
        }

    </style>
</head>
<body>
    <div class="container">
        <aside>        
            <a href="main.php"><img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand"></a>
            <div class="required">
                <h2>Requisitos do Cadastro</h2>
                <ul>
                    <li>Nome no minimo 5 caracteres</li>
                    <li>Senha deve ter simbolos (@, !, $, %, &...) </li>
                    <li>Senha deve ter letra Maiuscula (A-Z)</li>
                    <li>Senha deve ter letra Minuscula (a-z)</li>
                </ul>
            </div>
        </aside>

        <div class="login">
            <div class="containerLogo">
                <img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand" style="opacity: 100%;">
                <h2>SHAW!!!</h2>
                <p>Faça aqui seu Cadastro</p>
            </div>

            <form action="validar.php" class="formCadastro">
                <div>
                    <label for="nomeCadastro">Nome</label>
                    <input type="text" name="nomeCadastro" id="nomeCadastro">
                </div>
                
                <div>
                    <label for="emailCadastro">Email</label>
                    <input type="email" name="emailCadastro" id="emailCadastro">
                </div>
                <div>
                    <label for="telefoneCadastro">Telefone</label>
                    <input type="tel" name="telefoneCadastro" id="telefoneCadastro">
                </div>
                <div>
                    <label for="cep">CEP</label for="">
                    <input type="text" name="cep" id="cep">
                </div>
                <div>
                    <label for="senhaCadastro">Senha</label>
                    <input type="password" name="senhaCadastro" id="senhaCadastro">
                </div>
                <div>
                    <label for="confirmarSenha" style="width: 125px;">Confirmar Senha</label>
                    <input type="password" name="confirmarSenha" id="confirmarSenha">
                </div>
                <button class="register">Cadastrar</button>
            </form>
            <a href="login.php">Já tenho uma conta</a>
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>
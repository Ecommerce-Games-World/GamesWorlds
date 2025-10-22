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
            
            width: 30vw;
            height: 90vh;
            min-height: 870px;
            margin: auto;
            
            color: var(--white);
            background-color: var(--red);
            border-radius: 30px;
        }

        .espacamentoLogo {
            display: flex;
            justify-content: left;
            margin: 60px 0px 30px 15%;
        }
        
        .containerLogo {
            display: grid;
            grid-template: repeat(2, 1fr) / 50px 1fr;
            gap: 3px;
        }

        .containerLogo img {
            grid-area: 1 / 1 / 3 / 2;
        }
 
        .formCadastro {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
            gap: 17px;
            position: relative;
        }
        
        .formCadastro input {
            width: 20vw;
            padding: 10px 5px 10px 30px;
            /* margin: 10px 0; */

            border: none;
            border-radius: 20px;
        }
        

        .formCadastro div {
            position: relative;
            margin: 15px auto;
        }

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
            display: flex;
            flex-flow: nowrap column;
            width: 20vw;
            min-height: 450px;
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

        @media screen and (max-width: 1790px){
            .required {
                height: 350px;
            }
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
                    <li>Senha deve ter simbolos<br>(@, !, $, %, &...) </li>
                    <li>Senha deve ter letra Maiuscula<br>(A-Z)</li>
                    <li>Senha deve ter letra Minuscula<br>(a-z)</li>
                </ul>
            </div>
        </aside>

        <div class="login">
            <div class="espacamentoLogo">
                <div class="containerLogo">
                    <img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand" style="opacity: 100%;">
                    <h2>SHAW!!!</h2>
                    <p>Faça aqui seu Cadastro</p>
                </div>
            </div>

            <form action="validar.php" class="formCadastro">
                <div>
                    <label for="nomeCadastro">Nome</label>
                    <input type="text" name="nomeCadastro" id="nomeCadastro" placeholder="Ronaldo">
                </div>
                
                <div>
                    <label for="emailCadastro">Email</label>
                    <input type="email" name="emailCadastro" id="emailCadastro" placeholder="abcde@gmail.com">
                </div>
                <div>
                    <label for="telefoneCadastro">Telefone</label>
                    <input type="tel" name="telefoneCadastro" id="telefoneCadastro" placeholder="11 1234-5678">
                </div>
                <div>
                    <label for="cep">CEP</label for="">
                    <input type="text" name="cep" id="cep" placeholder="12345-678">
                </div>
                <div>
                    <label for="senhaCadastro">Senha</label>
                    <input type="password" name="senhaCadastro" id="senhaCadastro" placeholder="******">
                </div>
                <div>
                    <label for="confirmarSenha" style="width: 125px;">Confirmar Senha</label>
                    <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="******">
                </div>
                <button class="register">Cadastrar</button>
                <a href="login.php">Já tenho uma conta</a>
            </form>
            
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>
<?php
    session_start();

    $senhaCriptografada = str_repeat('*' , strlen($_SESSION['senha']));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesWorlds</title>
    <link rel="stylesheet" href="../css/desktop.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="../css/tablet.css">
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
            --titles: 'Inter';
            --text: 'PlusJakartaSans';
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;

            background-color: var(--red);
        }

        main {
            width: 850px;
            height: 750px;
            min-height: 0px;
            padding: 50px;

            color: var(--black);
            background-color: var(--white);
            border-radius: 40px;
            box-shadow: 4px 4px 4px #1907092f;
        }
        
        .voltarPerfil {
            display: flex;
            justify-content: center;
            align-items: center;
            
            width: 50px;
            height: 50px;
            background-color: var(--gray);
            border-radius: 40px;
        }
        
        .voltarPerfil:hover {
            background-color: var(--red);
        }

        .voltarPerfil:hover .colorArrowLeft {
            color: white;
        }
        
        a {
            text-decoration: none;
        }

        form {
            display: grid;
            grid-template: repeat(5, 1fr) / repeat(2, 1fr);
            justify-items: center;
            align-items: center;
            gap: 0 5px;

            height: 80%;
            margin: 20px 90px;
        }

        div {
            padding: 10px;

            background-color: var(--gray);
            border-radius: 20px;
            cursor: pointer;
        }

        label {
            margin: 0 10px 0 5px;
        }

        input {
            background-color: transparent;
            border: none;
        }

        input:focus {
            outline: none;
        }


        button {
            grid-area: 5 / 2 / 6 / 3;
            align-self: end;

            width: 80%;
            height: 45px;

            color: white;
            background-color: var(--black);
            border: none;
            border-radius: 20px;
        }

        button:hover {
            scale: 1.1;
        }

        #deletar_conta {
            grid-area: 5 / 1 / 6 / 2;

            background-color: var(--red);
        }
        
        .emailAlterar{
            grid-area: 2 / 1 / 3 / 3;
            width: 100%;
        }

        .nomeAlterar {
            grid-area: 1 / 1 / 2 / 3;
            width: 100%;
        }

        .telAlterar {
            grid-area: 3 / 2 / 4 / 3;
            justify-self: end;
            width: 95%;
        }

        .cepAlterar {
            grid-area: 4 / 1 / 5 / 2;
            justify-self: start;
            width: 95%;
        }

        .cpfAlterar {
            grid-area: 4 / 2 / 5 / 4;
            justify-self: end;
            width: 95%;
        }

        .senhaAlterar {
            grid-area: 3 / 1 / 4 / 2;
            justify-self: start;
            width: 95%;
        }

        #nomeAlterar, #emailAlterar {
            width: 83%;
        }

        #telefoneAlterar, #senhaAlterar, #cepAlterar, #cpfAlterar {
            width: 70%;
        }
    </style>
</head>
<body>
    <main>
        <a href="perfil.php">
            <div class="voltarPerfil colorArrowLeft"><i class="fi fi-rr-arrow-small-left colorArrowLeft"></i></div>
        </a>
        <form action="" method="post">
            <div class="emailAlterar">
                <label for="">Email: 
                    <input type="email" name="emailAlterar" id="emailAlterar" value="<?php echo $_SESSION['email']; ?>">
                </label>
            </div>
            <div class="nomeAlterar">
                <label for="">Nome: 
                    <input type="text" name="nomeAlterar" id="nomeAlterar" value="<?php echo $_SESSION['nome']; ?>">
                </label>
            </div>
            <div class="senhaAlterar">
                <label for="">Senha: 
                    <input type="text" name="senhaAlterar" id="senhaAlterar" value="<?php echo $senhaCriptografada;?>">
                </label>
            </div>
            <div class="telAlterar">
                <label for="">Tel:
                    <input type="tel:" name="telefoneAlterar" id="telefoneAlterar" value="<?php echo $_SESSION['telefone']; ?>">
                </label>
            </div>
            <div class="cepAlterar">
                <label for="">Cep:
                    <input type="text" name="cepAlterar" id="cepAlterar" value="<?php echo $_SESSION['cep']; ?>">
                </label>
            </div>
            <div class="cpfAlterar">
                <label for="">CPF:
                    <input type="text" name="cpfAlterar" id="cpfAlterar" value="<?php echo $_SESSION['cpf']; ?>">
                </label>
            </div>

            <button type="submit" name="submit" id="enviar_alterar">Enviar</button>
            <button name="deletar" id="deletar_conta">Deletar Conta</button>
        </form>
    </main>
</body>
</html>
<?php
    require_once('config.php');
    $msgErro = "";

    if(isset($_POST['recuperar'])){
        $nome = $_POST['nomeRecuperar'];
        $email = $_POST['emailRecuperar'];
        $telefone = $_POST['telefoneRecuperar'];

        $sqlExiste = "SELECT * FROM usuarios WHERE nome = '$nome' AND email='$email' AND telefone = '$telefone'";
        $resultadoExiste = $conexao->query($sqlExiste); 

        if(mysqli_num_rows($resultadoExiste) > 0){
            session_start();
            $dadosUsuario = $resultadoExiste->fetch_assoc();
            $_SESSION['id'] = $dadosUsuario['id'];

            header('location: /Games%20Worlds/GamesWorlds/pages/nova_senha.php');
            exit;
        }else {
            $msgErro = "Nome, Email ou telefone incorreto.";
        }
    }
?>
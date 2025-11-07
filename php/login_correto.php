<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include_once('config.php');

        $nomeLogin = $_POST['nomeUsuario'];
        $senhaLogin = $_POST['senhaUsuario'];  

        $sql = "SELECT * FROM usuarios WHERE nome = '$nomeLogin' and senha = '$senhaLogin'";
        $resultado = $conexao->query($sql);

        if(mysqli_num_rows($resultado) > 0){

            $dadosUsuario = $resultado->fetch_assoc();
            session_start();

            $_SESSION['email'] = $dadosUsuario['email'];
            $_SESSION['nome'] = $dadosUsuario['nome'];
            $_SESSION['senha'] = $dadosUsuario['senha'];
            $_SESSION['telefone'] = $dadosUsuario['telefone'];
            $_SESSION['cep'] = $dadosUsuario['cep'];
            $_SESSION['cpf'] = $dadosUsuario['cpf'];

            header('location: /Games%20Worlds/GamesWorlds/pages/main.php');
        }else{
            header('location: /Games%20Worlds/GamesWorlds/pages/login.php');
        }
    }
?>
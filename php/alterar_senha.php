<?php
    session_start();
    require_once('config.php');
    $id = $_SESSION['id'];
    session_destroy();

    if(isset($_POST['renovar'])){
        $senha = $_POST['senhaRecuperar'];
        $confirmarSenha = $_POST['confirmarRecuperar'];
        
        if($senha === $confirmarSenha){  
            $sqlAlterar = "UPDATE usuarios SET senha='$senha' WHERE id=$id";
            $resultadoAlterar = $conexao->query($sqlAlterar); 
            
            
            header('location: /Games%20Worlds/GamesWorlds/pages/main.php');
            exit;
        }else{
            header('location: /Games%20Worlds/GamesWorlds/pages/nova_senha.php');
            exit;
        }
    }
?>
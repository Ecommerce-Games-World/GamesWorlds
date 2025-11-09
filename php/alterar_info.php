<?php
    include_once('config.php');

    session_start();
    $id = $_SESSION['id'];

    if(isset($_POST['deletar_conta'])) {
        $sqlDeletar = "DELETE FROM usuarios WHERE id=$id";
        $resultadoDeletar = $conexao->query($sqlDeletar);

        if ($resultadoDeletar) {
            session_destroy();
            header('Location: ../pages/main.php');
            exit;
        }
    }

    if(isset($_POST['enviar_alterar'])){
        $nomeAlterado = $_POST['nomeAlterar'];
        $emailAlterado = $_POST['emailAlterar'];
        $senhaAlterado = $_POST['senhaAlterar'];
        $telefoneAlterado = $_POST['telefoneAlterar'];
        $cepAlterado = $_POST['cepAlterar'];
        $cpfAlterado = $_POST['cpfAlterar'];

        if($senhaAlterado == str_repeat("*", strlen($_SESSION['senha']))){
            $senhaAlterado = $_SESSION['senha'];
        }
        
        $sqlAtualizar = "UPDATE usuarios SET nome='$nomeAlterado', email='$emailAlterado' ,senha='$senhaAlterado', telefone = '$telefoneAlterado',cep='$cepAlterado', cpf = '$cpfAlterado' WHERE id='$id'";

        $resultado = $conexao->query($sqlAtualizar);
            
        $_SESSION['email'] = $emailAlterado;
        $_SESSION['nome'] = $nomeAlterado;
        $_SESSION['senha'] = $senhaAlterado;
        $_SESSION['telefone'] = $telefoneAlterado;
        $_SESSION['cep'] = $cepAlterado;
        $_SESSION['cpf'] = $cpfAlterado;

        header('location: ../pages/perfil.php');
        exit;
    }else {
        header('location: ../pages/informacao.php');
        exit;
    }

    
?>
<?php
    function nomeValido($nome){
        $nomeAceito = false; 
        if(strlen($nome) <= 8 && strlen($nome) >= 5){
            $nomeAceito = true;
        }

        return $nomeAceito;
    }

    function emailExistente($email){
        $emailAceito = false;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailAceito = true;
        }
        
        return $emailAceito;
    }

    function senhaValida($senha, $confirmarSenha){
        $senhaAceita = false;

        // verifica se há letra maiusculas, minusculas, números e simboloso
        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).+$/', $senha) && strlen($senha) < 8 && strlen($senha) > 0){
            $senhaAceita = true;
            // checar se a confirmação de senha está igual a senha 
            if($senha !== $confirmarSenha){
                $senhaAceita = false;   
            }
        }

        return $senhaAceita;
    }

    function conferirCep($cep){
        $cepAceito = false; 
        
        if(strlen($cep) == 8){
            $cepAceito = true;
        }

        return $cepAceito;
    }

    function conferirTelefone($telefone){
        $telefoneAceito = false;
        
        if (preg_match('/^\d{10,11}$/', $telefone)) {
           $telefoneAceito = true; 
        }

        return $telefoneAceito;
    }

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include_once('config.php');

        $nomeUsuario = $_POST['nomeCadastro'];
        $emailUsuario = $_POST['emailCadastro'];
        $senhaUsuario = $_POST['senhaCadastro'];
        $confirmarSenha = $_POST['confirmarSenha'];     
        $telefoneUsuario = $_POST['telefoneCadastro'];
        $cep = $_POST['cep'];

        $cep = preg_replace('/[^0-9]/', '', $cep);
        $telefoneUsuario = preg_replace('/\D/', '', $telefoneUsuario);

        $nomeAceito = nomeValido($nomeUsuario);
        $emailAceito = emailExistente($emailUsuario);
        $senhaAceita = senhaValida($senhaUsuario, $confirmarSenha);
        $cepAceito = conferirCep($cep);
        $telefoneAceito = conferirTelefone($telefoneUsuario);

        if($nomeAceito && $emailAceito && $senhaAceita && $cepAceito && $telefoneAceito){
            $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, cep) VALUES('$nomeUsuario', '$emailUsuario', '$senhaUsuario', '$telefoneUsuario', '$cep')");

            header("Location: /Games%20Worlds/GamesWorlds/pages/main.php"); 
            exit;
        }else{
            header("Location: /Games%20Worlds/GamesWorlds/pages/cadastro.php"); 
            exit;
        }
    }  
?>
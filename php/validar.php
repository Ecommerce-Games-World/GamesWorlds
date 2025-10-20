<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nomeUsuario = $_POST['nomeCadastro'];
        $emailUsuario = $_POST['emailCadastro'];
        $telefoneUsuario = $_POST['telefoneCadastro'];
        $cep = $_POST['cep'];
        $senhaUsuario = $_POST['senhaCadastro'];
        $confirmarSenha = $_POST['confirmarSenha'];

         if (strlen($nomeUsuario) < 5) {
            echo '<span>Usuário inválido. </span>';
        }else {
            $classeListaNomeCaractere = "listaDisc";
            $nomeUsuarioAceito = true;
        }

        // Validar senha
        if (strlen($senhaUsuario) <= 0) {
            echo '<span>Senha inválida.</span>';
        }elseif (!preg_match('/[A-Z]/', $senhaUsuario)) {
            echo '<span>Senha inválida.</span>';
        }elseif (!preg_match('/[a-z]/', $senhaUsuario)) {
            echo '<span>Senha inválida.</span>';
        }elseif (!preg_match('/[0-9]/', $senhaUsuario)) {
            echo '<span>Senha inválid</span>';
        }elseif (!preg_match('/[\W_]/', $senhaUsuario)) {
            echo '<span>Senha inválida.</span>';
        }else{
            $senhaUsuarioAceito = true;
        }

        // Confirmar Senha

        if($senhaUsuario === $confirmarSenha){
            // confirmar senha valida
        }else{
            // confirmar senha invalido 
        }

        // Validar CEP

        if(strlen($cep) > 8 || strlen($cep) < 8){
            // CEP Invalido
        }else{
            // CEP Valido
        }

        // Trocando a classe da lista

        if (strlen($senhaUsuario) > 10 || strlen($senhaUsuario) <= 0) {
            $classeListaSenhaCaractere = "listaCircle";
        }else{
            $classeListaSenhaCaractere = "listaDisc";
        }

        if (!preg_match('/[A-Z]/', $senhaUsuario)) {
            $classeListaSenhaMaiuscula = "listaCircle";
        }else{
            $classeListaSenhaMaiuscula = "listaDisc";
        }

        if (!preg_match('/[a-z]/', $senhaUsuario)) {
            $classeListaSenhaMinuscula = "listaCircle";
        }else{
            $classeListaSenhaMinuscula = "listaDisc";
        }

        if (!preg_match('/[0-9]/', $senhaUsuario)) {
            $classeListaSenhaNumero = "listaCircle";
        }else{
            $classeListaSenhaNumero = "listaDisc";
        }

        if (!preg_match('/[\W_]/', $senhaUsuario)) {
            $classeListaSenhaSimbolo = "listaCircle";
        }else{
            $classeListaSenhaSimbolo = "listaDisc";
        }

        // Validar Telefone
        
        $telefoneLimpo = preg_replace('/\D/', '', $telefoneUsuario);
        if (preg_match('/^\d{10,11}$/', $telefoneLimpo)) {
           $telefoneUsuarioAceito = true; 
        }

        // Validar Email
        
       
    }
?>
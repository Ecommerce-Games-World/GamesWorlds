<?php
    function nomeCorrespondente($nome){
        $nomeExiste = false;
        
        if($nome == 0){

        }else{

        }
        
        return $nomeExiste;
    }

    function senhaCorrespondente($senha){
        $senhaExiste = false;

        if($senha == 0){

        }else{

        }

        return $senhaExiste;
    }

    function loginValido($senhaExiste, $nomeExiste){
        if($senhaExiste && $nomeExiste){

        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include_once('config.php');

        $nomeLogin = $_POST['nomeUsuario'];
        $senhaLogin = $_POST['senhaCadastro'];  

        $nomeExiste = nomeCorrespondente($nomeLogin);
        $senhaExiste = senhaCorrespondente($senhaLogin);

        
    }
?>
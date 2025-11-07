<?php
    $bdhost = 'Localhost';
    $bdUsername = 'root';
    $bdPassword = 'Abbys456@';
    $bdName = 'games-world';

    $conexao = new mysqli($bdhost, $bdUsername, $bdPassword, $bdName);

    // if($conexao->connect_errno){
    //     echo "erro";
    // }else {
    //     echo "conexao aceita";   
    // }
?>
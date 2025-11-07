<?php 
    if(!isset($_SESSION)){
        session_start();
    }

    session_destroy();

    header('location: /Games%20Worlds/GamesWorlds/pages/main.php');
?>
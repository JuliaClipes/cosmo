<?php
    session_start();
    if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
    {
        session_destroy();
        header('location:index.php');
    }else{
        echo "Erro ao deslogar";
    }
?>

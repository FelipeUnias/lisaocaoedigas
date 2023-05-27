<?php
    session_start();

    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($login == "allan" && $senha == "123"){
        $_SESSION['usuario'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:main.php');
    }
    else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        echo "Não está logado!<br/>";
        header('location:index.php');
    }
?>

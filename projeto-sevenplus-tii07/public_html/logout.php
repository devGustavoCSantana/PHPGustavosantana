<?php
    session_start();

    // Destroi todas as variáveis de sassão 
    session_destroy();

    // Redirecionamento para a página de login
    header("Location: index.php");
    exit();
?>
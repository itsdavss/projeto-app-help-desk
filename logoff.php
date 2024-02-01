<?php

    session_start();

    //remover índices do array de sessão
    //unset()
    //remove o índice apenas se ele existir

    //destruir a variável de sessão
    //session_destroy()
    //será destruída após uma nova requisição, por isso é recomendado o redirecionamento

    session_destroy();
    header('Location: index.php');

?>
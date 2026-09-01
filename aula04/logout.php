<?php

session_start();
//apaga as variáveis de sessão
session_unset();
//apaga a sessão
session_destroy();

header('Location:login.php');
?>
<?php
try{
    $arquivo = fopen("usuarios.txt", "r");
    $conteudo = fread($arquivo, filesize("usuarios.txt"));
    echo nl2br($conteudo);
    fclose($arquivo);

    $usuarios = explode("\n", $conteudo);
    array_pop($usuarios); //remobe o ultimo elemento do array

    foreach($usuarios as $user){
        $u = explode("|", $user);
        echo "<img src='" .$u[3] . "'width='50'>";
        echo "<br>Nome: " . $u[0];
        echo "<br>E-mail: " . $u[1];
        echo "<br>Senha: " . $u[2];
        echo "<br>URL: " . $u[3];
    }

    // var_dump($usuarios);
}
catch(Exception $e){
    echo "Erro ao abir o arquivo!" . $e;
}


?>
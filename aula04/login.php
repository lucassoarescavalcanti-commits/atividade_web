<?php

    if(isset($_COOKIE['email'])){
        $email = $_COOKIE['email'];
    }
    else{
        $email = "email@email.com";
    }



?>



<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Área restrita</title>
</head>
<body>
    <form action="#" method="post">
        <label>Área Restrita</label>

        <input type="email" value="<?php echo $email; ?>" name="email" required>

        <input type="password" name="senha" placeholder="senha" minlength="6" maxlength= "8" required>

        <input type="checkbox" name="lembre" value="lembre">Lembre-me

        <input type="submit" value="Entrar">
    </form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['email']) && isset($_POST['senha'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if(isset($_POST['lembre'])){
                setcookie('email',$email,time()+45645);
            }

            if($email=="admin@email.com"){
                if($senha=="123456"){

                    session_start();

                    $_SESSION['email-user'] = $email;
                    header('Location:dashboard.php');
                }
                else{
                    echo "<p class='msg'>Senha incorreta!</p>";
                }
            }
            else{
                echo "<p class='msg'>E-mail incorreto!</p>";
            }
        }
    }



?>
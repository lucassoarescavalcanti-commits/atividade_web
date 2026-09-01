<?php

session_start();
$emailuser= "";

if(isset ($_SESSION['email-user'])){
    $emailuser = $_SESSION['email-user'];
}
else{
    header('Location:login.php');
}
?>

<h1>AAAAAAAAAAA</h1>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header{
            display: flex;
            justify-content: space-between;
            align-items:center;
            background-color: brown;
            padding:30px;
            color: white;
        }
        .btn{

        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <p><?php echo $emailuser;?></p>
        <nav>
            <a href="logout.php" class="btn">Logout</a>
        </nav>
    </header>
</body>
</html>
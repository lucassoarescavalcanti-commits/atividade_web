<?php

// echo "Produto: " . $_GET['id'];
// echo "<br>Produto: " . $_GET['title'];
session_start();
$id = $_GET['id'];
$price = $_GET['price'];
$acao = $_GET['acao'] ?? 'somar';

if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

if($acao === 'subtrair'){
    if(isset($_SESSION['carrinho'][$id])){
        $_SESSION['carrinho'][$id]--;
        if($_SESSION['carrinho'][$id] <= 0){
            unset($_SESSION['carrinho'][$id]);
        }
    }
} else {
    
    if(isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]++;
    } 
    else {
        $_SESSION['carrinho'][$id] = 1;
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

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
            background-color: brown;
            border-radius: 5px;
            color: brown;
            font-weight: bold;
            padding: 2px;
        }
        a{
            text-decoration: none;
        }
        main{
            padding: 30px;
        }
        h2{
            text-align: center;
            margin: 20px 0;
        }
        section{
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
        }
        article{
            background-color: gray;
            margin: 5px;
            padding: 40px;
            box-shadow: 2px 2px 5px black;
        }
        .comprar{
            background-color: brown;
            border-radius: 5px;
            color: yellow;
            font-weight: bold;
            padding: 2px;
        }

        .quantid
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <nav>
            <a href="logout.php" class="btn">Logout</a>
        </nav>
    </header>

    <main>
        <section>
    <?php
    foreach($_SESSION['carrinho'] as $id => $quantidade){
    $response = file_get_contents('https://fakestoreapi.com/products/' . $id);
    $produtos = json_decode($response, true);

    
    
    ?>
    <article>
        <img src="<?php echo $produtos['image'];?>" width="100px" height="80px">
        <h2><?php echo $produtos['title'];?></h1>
        <h3><?php echo $produtos['category'];?></h1>
        <p><?php echo $produtos['price'];?></p>
        <p><?php echo $quantidade; ?></p>
        <a href="carrinho.php?id=<?php echo $id?>" class="quantidade soma">+</a>
        <a href="carrinho.php?id=<?php echo $id?>&acao=subtrair" class="quantidade subtração">-</a>
  </article>

    <?php
}

?>
    <?php
    
    foreach($produtos as $prod => $id){
        echo $prod['price'];
    }
    
    ?>
    <a href="dashboard.php">Continuar Comprando</a>
    
</section>
</main>
</body>
</html>

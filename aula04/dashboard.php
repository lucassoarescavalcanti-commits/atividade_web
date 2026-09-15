<?php

session_start();
$emailuser= "";

if(isset ($_SESSION['email-user'])){
    $emailuser = $_SESSION['email-user'];
}
else{
    header('Location:login.php');
}

  $response = file_get_contents('https://fakestoreapi.com/products');
  $produtos = json_decode($response, true);

  if(!isset($_SESSION['carrinho'])){
      $_SESSION['carrinho'] = [];
      
  }





?>
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

    <main>
        <h2>Nossos Produtos</h2>
        <section>
            <?php
            
                foreach($produtos as $prod){
                    ?>
            <article>
                <img src="<?php echo $prod['image']; ?>" alt="foto do produto" width="100px" height="80px">
                <h2><?php echo $prod['title'];?></h2>
                <h3><?php echo $prod['category']; ?></h3>
                <p><?php echo $prod['price']; ?></p>
                <a href="carrinho.php?id=<?php echo $prod['id'];?>&title=<?php echo $prod['title'];?>&price=<?php echo $prod['price'];?>">Comprar</a>
                
            </article>
            <?php
            
                } 
            
            ?>

        </section>
    </main>
</body>
</html>

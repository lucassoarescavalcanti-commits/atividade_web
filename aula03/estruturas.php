<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $num = $_POST['numero'];
    if($num>=0 && $num<=10){
        switch($num){
            case 0:
                echo "Todas as Tabuadas de 1 a 10";
                    for($i=1;$i<=10;$i++){
                        $n = 1;
                        echo "<br><br>Tabuada do $i";
                        while($n<=10){
                            $tab = $n*$i;
                        echo "<br>$i x $n = $tab";
                        $n++;
                        }
                        
        }
                break;
            case 1:
                $c = 1;
                echo "Tabuada do número " . $c;
                do{
                    $tab = $num*$c;
                    echo "<br>$num x $c = $tab";
                    $c++;
                }while($c<=10);

                break;
                
        }
        

    }
    else{
        echo "Informe um número entre 0 e 10";
        echo "<br><a href='estruturas.html'><br>";
    }
}


?>
<?php
    print("Mi primer PHP hola");
    echo "<h1>Hola</h1>";
    $a=1;
    echo "<h3>Valor: $a</h3>";
    function mensaje(){
        echo "Metodo";
    }
    mensaje();
    function num($num){
         echo "Numero: $num<br>";
    }
    num($a);
    
    $v1=1;
    $v2=4;
    $v3=3;
    
    function may($v1,$v2,$v3){
        
        if($v1>$v2&&$v1>$v3){
            echo "v1 es la mayor<br>";
        }else{
            if($v2>$v1&&$v2>$v3){
                echo "v2 es la mayor<br>";
            }else{
                if($v3>$v2&&$v3>$v2){
                    echo "v3 es la mayor<br>";
                }
            }
        }
        if($v1<$v2&&$v1<$v3){
            echo "v1 es la menor<br>";
            } else{
                if($v2<$v1&&$v2<$v3){
                    echo "v2 es la menor<br>";
                }else{
                    if($v3<$v2&&$v3<$v1){
                        echo "v2 es la menor<br>";
                    }
                }
            }
    }
    
    may($v1,$v2,$v3);
?>
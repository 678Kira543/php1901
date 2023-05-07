<?php
    function hello(){
        echo "Hello world"."<br>";
    }
    hello().
    hello();
    hello();
    /*function mymin($a, $b){
        if($a>$b){
            return $b;
        }else{
            return $a;
        }
    }
    echo mymin( 5, 7);*/

    /*function sayHI($name){
        echo "Привет ".$name."<br>";
    }
    function f($x){
       return $x*$x+10;
    }
    echo f( 5)."<br>";
    echo f( 3)."<br>";
    echo f( -4)."<br>";
    sayHI("Иван");
    sayHI("Вася");*/
?>



<?php
/*$findPosition = 0;
$num=1;
    $chars = ["К","Л","М","Н"];
    for ($i=0; $i<count($chars); $i++){
        for($j=0; $j<count($chars); $j++){
            for($k=0; $k<count($chars); $k++){
                for($l=0; $l<count($chars); $l++){
                    $word = $chars[$i].$chars[$j].$chars[$k].$chars[$l];
                    if($word == "КМНЛ") $findPosition = $num;
                    echo ($num++).") ".$word."<br>";
                }
            }
        }
    }
    echo "Слово КМНЛ на позиции ".$findPosition;*/
?>




<?php
/*<table style="border; 1px solid black;">
    <?php
    for ($i=2; $i<=10; $i++){
        echo "<tr>";
        for($j=2; $j<10; $j++){
            echo "<td style='border: 1px solid black; margin: 0; padding: 3px;'>$j*$i=".($j*$i)."</td>";
        }
        echo "</tr>";
    }
</table>
   $star = "";
   $space = "";
   for ($i = 0; $i<30; $i++){
            $star = $star."*";
            for ($j=29; $j>=$i; $j--){
                $space = $space."&nbsp";
            }
            echo $space."$star<br>";
            $space = "";
      }*/
?>
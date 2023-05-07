<?php
/*function getChange($num)
{
    $coin = 0;
    if ($num >= 10) $coin = 10;
    else if ($num >= 5) $coin = 5;
    else if ($num >= 2) $coin = 2;
    else if ($num >= 1) $coin = 1;

    if ($num != 0){
        echo "$coin<br>";
    getChange($num - $coin);
    }
}
getChange(15);*/


function f($x){
    if ($x>2){
        return f($x-1)+f($x-2);
    }else{
        return $x;
    }
}

function g($x){
        if($x>2){
            return g($x-1)+f($x-2);
        }else{
            return 1;
        }


}

echo g(5);

/*function cashbox($money, $snickersCost, $candyCost){
    $countSnickers = floor($money/$snickersCost);
    $change = $money - ($countSnickers *$snickersCost);
    $countCandy = floor($change/$candyCost);
    $change = $change - $countCandy*$candyCost;
    return [$countSnickers, $countCandy, $change];
}

//echo ;
var_dump(cashbox(1000,35, 3.5));*/
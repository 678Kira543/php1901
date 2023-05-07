<?php
$nums = [-526,-423,-32,-534,-64,-22,-43];
$max = -INF;
for ($i=0; $i<count($nums); $i=$i+1){
    if($max<$nums[$i] and $nums[$i]%2!=0){
        $max = $nums[$i];
    }
}
echo $max;

/*$marks = [5,5,4,5,5,4,5,5,4];
$summ = 0;
for ($i=0; $i<count($marks); $i=$i+1){
    $summ = $summ + $marks[$i];
}
echo $summ/count($marks);*/
/*$cars = ["bmw", "audi", "kia", "infinity"];
for ($i=0; $i<3; $i=$i+1) {
    echo $cars[$i]. "<br>";
}
do{
    echo "Hello world";
}while(false);*/

/*$i = 0;
while ($i<count($cars)){
    echo $cars[$i]. "<br>";
    $i = $i + 1;
}*/
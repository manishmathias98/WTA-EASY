<?php
$states="MISSISSIPPI ALABAMA TEXAS MASSACHUSETTS KANSAS";
$b=explode(" ",$states);
echo "ORIGINAL ARRAY<br>";
foreach($b as $i=>$value)
echo "state[$i]=$value<br>";
foreach($b as $c){
    $n=strlen($c);
    if($c[$n-1]=='S' && $c[$n-2]=='A' && $c[$n-3]=='X')$d[0]=$c;
    if($c[$n-1]=='S' && $c[0]=='K')$d[1]=$c;
    if($c[$n-1]=='S' && $c[0]=='M')$d[2]=$c;
    if($c[$n-1]=='A')$d[3]=$c;
}
echo "NEW ARRAY<br>";
foreach($d as $c=>$i){
    echo "statelist[$c]=$i<br>";
}
?>
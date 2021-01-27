<?php
function pr($a){
    foreach($a as $b){
        foreach($b as $c){
            echo $c.' ';
        }echo '<br>';
    }echo '<br>';
}
$a=[[1,2,3],[4,5,6],[7,8,9]];
$b=[[7,8,9],[4,5,6],[1,2,3]];
echo 'First matrix:<br>';pr($a);
echo 'Second matrix:<br>';pr($b);
for($i=0;$i<3;$i++)
for($j=0;$j<3;$j++)
$c[$i][$j]=$a[$j][$i];
echo 'Transpose of two matrix:<br>';pr($c);
for($i=0;$i<3;$i++)
for($j=0;$j<3;$j++)
$c[$i][$j]=$a[$i][$j]+$b[$i][$j];
echo 'Addition of two matrix:<br>';pr($c);
for($i=0;$i<3;$i++)
for($j=0;$j<3;$j++)
{
    $c[$i][$j]=0;
    for($k=0;$k<3;$k++)
    $c[$i][$j]+=$a[$i][$k]*$b[$k][$j];
}
echo 'Multiplication of two matrix:<br>';pr($c);
?>
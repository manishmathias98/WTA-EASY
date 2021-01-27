<?php
echo "<h4>REFRESH PAGE</h4>";
$file='count.txt';
$c=file_get_contents($file);
file_put_contents($file,$c+1);
echo 'The number of visisters is '.$c;
?>
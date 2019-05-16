<?php

$v = array();
$total = 0;
$i = 0;
for ($i = 0; $i < 15; $i++) {
$v[$i] = 0;
}
for ($i = 0; $i < 15; $i++) {
echo "digite um valor";
$v[$i] = readline();
}
for ($i = 0; $i < 15; $i++)  {
echo "o valor de uma posição";
echo $i;
echo "é ";
echo $v[$i];
echo PHP_EOL;
}
for ($i = 0; $i < 15; $i++) {
$total = $total + $v[$i];
}
echo "a soma de todas as somas é:";
echo $total;
echo PHP_EOL;
?>

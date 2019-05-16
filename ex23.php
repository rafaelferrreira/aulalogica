<?php

$v = array();
$i = 0;
for ($i = 0; $i < 10; $i++) {
    echo "digite um valor:";
    $v[$i] = readline();
}
for ($i = 0; $i < 10; $i++) {
echo "o valor de uma posição";
echo $i . PHP_EOL;
echo "é :";
echo $v[$i] . PHP_EOL;
}

?>

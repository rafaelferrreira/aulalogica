<?php
$v = 0;
echo "escreva um determinado valor:";
$v = readline();
if ($v > 10 and $v < 20) {
echo "valor maior que 10";
} else if ($v >= 20 and $v < 30) {
echo "esse valor é maior ou igual a 20";
} else if ($v >= 30 and $v < 40) {
echo "este valor é maior ou igual a 30 e menor que 40";
} else {
echo "valor fora da faixa!";
}
?>
 
 

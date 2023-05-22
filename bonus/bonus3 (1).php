<?php
$n = 1000;
$num = 0;
// condition - условие
$c = 50;
for ($n = 1000; $n >= $c; $num++) {
$n=$n/2;
}
echo 'Количество итераций: '.$num.PHP_EOL;
echo 'Число < '.$c.' = '.$n.PHP_EOL;
?>
<?php
echo __LINE__, "\n", __FILE__,"\n";


$s1 = <<<ff
Рыба
для
рыбы
ff;
echo $s1,"\n";


$a='Рыба';
$b='человек';
$c = mb_strtolower(mb_strimwidth($a,0,3));

echo $a," $c","ою"," сыта, а ",$b," $b","ом";
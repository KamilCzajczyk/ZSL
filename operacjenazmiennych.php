<?php
// wersja php 7.2.33
echo PHP_VERSION.'<hr>';
//wiecej informacji
//echo phpinfo();
$potega=2**10;
echo "$potega".'<hr>'; //1024

//operatory bitowe
//and &, or |, not

$x=0b1010;
echo "$x<hr>"; //10

$x=$x <<1;
echo "$x<hr>"; //20

$x=$x >>2;
echo "$x<hr>"; //5

// porwnaine
$q=1;
$y=1;

$result= $q<=>$y; //q>y = 1,q=y=0, q<y=-1
echo "$result<hr>";

 ?>

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
//operacja if warunkowa
$h=1;
$n=1.0;

if ($h===$n) {
  echo "Zmienne sa identyczne";
}
else
{
  echo "Nie sa identyczne <br>";
}
echo "<hr>";
//instrukcja pozyskania typu danych
echo gettype($h).'<br>';
echo gettype($n).'<hr>';

/*
preinkrementacja ++x
postinkrementacja x++
predekrementacja --x
postdekrementacj x--
*/

//////////////////////////////////////////////////////////////////////////
$o=2;
echo $o++;  //2
echo ++$o; //4
echo $o; //4
$q=$o++;
echo $q; //4
$q=++$o;
echo $q; //6
echo ++$o; //7



?>

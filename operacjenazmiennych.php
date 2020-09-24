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
//operatory rzutowania
//int float string array object unset
echo "<hr>";
$test1='123abc45';
echo 'Typ danych $test1',gettype($test1)."<br>";
$test1=(int)$test1;
echo "<br>".$test1;
echo 'Typ danych $test1',gettype($test1)."<hr>";

$test2=0;
echo 'Typ danych $test2',gettype($test2)."<br>";
$test2=(bool)$test2;
echo "<br>".$test2;
echo '<br>Typ danych $test2',gettype($test2)."<hr>";

$test3=10;
echo 'Typ danych $test3',gettype($test3)."<br>";
$test3=(float)$test3;
echo "<br>".$test3;
echo '<br>Typ danych $test3',gettype($test3)."<hr>";

//unset usuwa wartosc NULL
$test5=(unset)$test3;
echo 'Typ danych $test5',gettype($test5)."<br>";
$test1=(float)$test5;
echo "<br>".$test5;
echo 'Typ danych $test5',gettype($test5)."<br>";
// rozmir typu integer

echo PHP_INT_SIZE."<hr>";//8


?>

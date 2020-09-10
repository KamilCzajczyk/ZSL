<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>

	<?php
    $name='Janusz';
    echo 'Imię: $name <br>';
    echo "Imię: $name <br>";
    echo 'test';
// konkatenancja .
// typy danych
//boolean
$prawda= true;
$fałsz= false;
echo "$prawda";
echo "$fałsz"; //nic niewyswietyla
// integer
$całkowite=10;
$hex = 0xA;
$oct = 010;
$bin= 0b1011;
echo "<hr>$hex";
echo "<hr>$oct";
echo "<hr>$bin";

//składnia heredoc
$surname="Nowak";
$name2="Krystyna";

$tekst =<<< ETYKIETA
Imie:$name2<br>
Nazwisko:$surname<hr>
ETYKIETA;
echo "<br><hr>$tekst";

echo <<<E
drugi heredoc<hr>
E;

// składnia nowdoc


$city="poznan";
echo <<< 'E'
Miasto: $city

E;


echo "<hr>Nazwa zmiennej \$city, wartość $city"

     ?>
  </body>
</html>

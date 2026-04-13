<?php
//koment
#koment
/* */

//Variablat

$var = 12;
$var = "12";

//tipet e te dhenave

$stringu = "PHP";  //string
$integer = 20;     //int
$float = 20.1  ;    //float
$bool = true;
$null = null;
// $vargu = array(1,2,3)
$vargu = [1,2,3];

//metodat e printimit

echo "Ushtrime ne" , $stringu , "<br/>";
echo "Ushtrime ne \$stringu <br/>";

echo "Ushtrime ne " . $stringu . "<br />";

//print
$printimi = print($stringu) . "<br />";
// {
//     echo.  
//     return 1
// }
echo $printimi;

//print_r
echo $vargu; //error, can't print arrays like this
print_r($vargu); // just a print of pos and members

//var_dump()
var_dump($vargu); //print of type, values, pos, members

//kontrolli i tipit te te dhenave
echo gettype($vargu);

echo is_int($integer);

//op. aritmetik
//+, -, *, /, %, 2**3 pow(2,3)

$x = 3;
$y = "123sdfsdf";

echo $x + $y; //error

//DHE && OSE || NOT !
if(is_int($x) && is_int($y)){
    echo "<br />" . $shuma = $x + $y . "<br />";
}
else{
    echo " <br > Gabim";
}

echo "test";

//== , ==== , >= 

?>
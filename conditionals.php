<?php

//blloqet e kushtezimit
//IF, IF...ELSE, IF...ELSEIF...ELSE, SWITCH

$time = date("H");
//echo $time;
echo gettype($time) . "<br>";
if($time > "10" && $time < "16"){
    echo "Have a good day! <br>";
}
elseif($time > 6 && $time <= 10){
    echo "Good morning...<br>";
}
//elseif(){}
else {
    echo "Have a good night! <br>";
}

switch($time){
   case $time > 6 && $time <= 10 : 
    echo "Good morning <br>";
    break;
   
   case $time > "10" && $time < "16" : 
    echo "Have a good day! <br>";
    break;

   default :  echo "Have a good night! <br>";

}

//LOOPS
//for,foreach,while,do...while

$a = 0;
$b = 0;
for($i = 0 ; $i < 5; $i++){
    $a += 10;  //$a = $a +10
    $b += 5;
}

echo " a = $a , b = $b  <br>";

//while , do..while
$x = 0;
$y = 0;
$i = 0;

do
{
    $x+= 10;
    $y+= 5;
    $i++;
}
while($i < 0);
// do{
//     $x+= 10;
//     $y+= 5;
//     $i++;
// }
// while($i < 0);

//echo " x = $x , y = $y  <br>";

//string functions

echo strlen("Pershendetje tung!");
echo "<br>";
echo "<br>";



?>
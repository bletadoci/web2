<?php
echo strlen("Pershendetje tung!");
echo "<br>";
echo "<br>";

echo strpos("Pershendetje tung!","Pershendetje");
echo "<br>";
echo "<br>";

$str = addcslashes("Programimi ne Ueb II!","U");
echo($str);
echo "<br>";
echo "<br>";
$str = "Gjuha programuese PHP per backend!";
echo $str."<br>";
echo addcslashes($str,'A..Z')."<br>";
echo addcslashes($str,'a .. z')."<br>";
echo addcslashes($str,'a .. g');
echo "<br>";
echo "<br>";

$str = "Pershendetje!\n\n";
echo $str;
//Alias of rtrim()
echo chop($str);
echo "<br>";
echo "<br>";

$str = 'nje, dy, tre, kater';
// zero limit
print_r(explode(',',$str,1));
echo "<br>";
// positive limit
print_r(explode(',',$str,4)); //0 and 1 dont split, 2 splits into 2, 3 into 3 and so on..
echo "<br>";
// negative limit
print_r(explode(',',$str,-1)); //removes last element
echo "<br>";
echo "<br>";

$find = array("Pershendetje","tung");
$replace = array("B");
$arr = array("Pershendetje","tung","!");
print_r(str_replace($find, $replace,$arr));


$i = 0;
$num = 50;
while( $i < 10)
{
$num --;
$i++;
}

echo ("i = $i and num = $num" );
echo "<br>";
echo "<br>";



$i = 0;
$num = 0;
do{

$i++;
} while( $i < 10 );
echo ("i = $i" );
echo "<br>";
echo "<br>";
//str_replace(what_to_find, replace_with, where_to_look)

?>
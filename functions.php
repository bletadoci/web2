<?php 
function shuma($a, $b){
    return $a + $b;
}

//void
function printhello(){
    echo "Hello World!";
}

echo shuma(5,10);
printhello();

//anonymous function -> ruhet ne var
$shuma = function($a, $b){
    return $a + $b;
};
echo "</br>" . $shuma(5, 10);

//arrow function -> ska void, ruhet ne var
$shumaArrow = fn($a, $b) => $a + $b;
echo "</br>" . $shumaArrow(2,3);

//variablat globale dhe lokale
$globalVar = "I am a global variable";

function testGlobal(){
    global $globalVar; //-> obligative me kallxu qe o var globale
    echo $globalVar;
}
echo "</br>";
testGlobal();

function test($var){
    echo $var;
}
echo "</br>";
test($globalVar); //<--------

//superglobal (vargje asociative te PHP qe ruajne vlera te caktuara) -> 
// -> $_GLOBALS['globalVar']; -> ruan var globale
function testGlobalSuper(){
    echo $GLOBALS['globalVar'];
    //$_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER, $_FILES, $_REQUEST
}

testGlobalSuper();

echo $_GET['name'] ?? 'No name provided';

//funksione variabile/variadic function
function sum(...$numbers){ //sa do inputs qe i shtim i run me ni array $numbers
//perdoret kur nuk e dim sa parametra kan me na ardh
    return array_sum($numbers);
}

echo "</br>" . sum(1,2,3,4,5);
echo "</br>" . sum(10, 20);
echo "</br>" . sum(1);

//konstantet
define("PI", 3.14159);
echo "</br>" . PI; //-> skan shej te dollarit, pref me shkr tmdhaja, nuk mbishkruhet

//deklarimi me const
const EULER = 2.71828;
echo EULER;

//mujna me specifiku tipin ne funct
function shuma1(int $a, int $b){
    return $a + $b;
}

//references
function increment(&$num){
    $num++;
}
$x =5;
increment($x); //-> nese ne funct thirrim $num merr kopje te value 5, $x met i pandryshueshem
//kurse me &$num e thirr tek adresa


?>
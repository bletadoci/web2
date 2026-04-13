<?php
$vargu = array(1,2,3,4);
$vargu1 = [1,2,3,4];

foreach($vargu as $anetari){
    echo $anetari . " ";
}
//numerimi
echo count($vargu1);
echo "<br />";
for($i=0 ; $i < count($vargu1) ; $i++){
    echo $vargu[$i]. " ";
}
echo $vargu[2];
array_push($vargu, 5);
$vargu[9]=15;
var_dump($vargu);
array_pop($vargu);
//vargjet asociative
$notat = [
    /*jo indexi por emri dmth key,, value: 9-->*/"db" => 9,
    "php" => 8,
    "ssh" => 10
];
echo "<br/>" . $notat["php"];
//vargu dimensional
$studentet = [
    "Studenti 1" => [
    "db" => 9,
    "php" => 8,
    "ssh" => 10
    ],
    "Studenti 2" => [
    "db" => 9,
    "php" => 8,
    "ssh" => 10
    ]
];
echo $studentet["Studenti 2"]["db"];

//sortimi
//sort()
//based on key: ksort()
//based on reverse rsort() --> based on value
?>
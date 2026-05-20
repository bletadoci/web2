<?php
require_once 'DbDetyra.php';
/* Deklaroni nje sesion qe numeron ne numra tek vizitat ne ueb faqe. 
   Printoni numrin e vizitave sa here qe beni reload 
   dhe ne fund mbyllni te gjitha sesionet brenda ueb faqes. */

// Handle POST first (destroy session, then redirect to avoid resubmission)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dil'])) {
    session_start();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

$_SESSION['count'] += 1;

if ($_SESSION['count'] % 2 == 1) {
    echo "<br>Keni vizituar numer tek here faqen: " . $_SESSION['count'];
}


/*Krijoni nje varg te cookie-ve Lenda ku I inicializoni disa lende dhe printone secilen lende ne
rresht te ri. Anetari I trete I vargut duhet te largohet pas 24 oreve.*/

$lendet = array("Matematike", "Fizike", "Kimia", "Biologji", "Gjeografi");

$data = array(
    'lendet' => $lendet,
    'krijuar' => time()
);

setcookie("Lenda", json_encode($data), time() + 86400, "/");

if (isset($_COOKIE['Lenda'])) {
    $teDhenat = json_decode($_COOKIE['Lenda'], true);
    $lendetRuajtur = $teDhenat['lendet'];
    $krijuar = $teDhenat['krijuar'];
    
    if (time() - $krijuar >= 86400) {
        unset($lendetRuajtur[2]);
        $lendetRuajtur = array_values($lendetRuajtur);
        echo "Kane kaluar 24 ore! Anetari i trete u largua.<br><br>";
    }
    
    foreach ($lendetRuajtur as $lende) {
        echo $lende . "<br>";
    }
}



/*
Te krijohet nje fajll me detajet e konektimit me bazen e te dhenave. Kete fajll e perdoni ne nje
fajll tjeter ne te cilin do te shfaqni ne forme tabelare te dhenat e Useri (emer, mbiemer, id) nese
supozojme qe User eshte nje tabele ne databazen tone.*/

function shfaqDhenat(){
    $conn = getConnection();
    $query = $conn->query("SELECT * FROM Users");
    $array = $query->fetch_all();
    foreach($array as $a){
        //i merr si $a['emri']
    }

}

?>
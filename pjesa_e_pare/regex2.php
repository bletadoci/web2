<?php

$email1 = "test@hotmial.com";
print "Email-i testues: '$email1'";
print "<br>";
if (preg_match(
    '/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',
    $email1
)) {
    echo "Email adresa1 është valide.";
    echo "<br>";
    echo "<br>";
} else {
    echo "Email adresa1 nuk është valide.";
    echo "<br>";
    echo "<br>";
}
?>

<?php
$email2 = "emri.mbiemri@aaa.bbb.com";
print "Email-i testues: '$email2'";
echo "<br>";

$regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

if (preg_match($regexp, $email2)) {
    echo "Email adresa2 eshte valide.";
    echo "<br>";
    echo "<br>";
} else {
    echo "Email adresa2 <u>nuk</u> eshte valide.";
    echo "<br>";
    echo "<br>";
}
?>

<?php
//formatimi i dates
$date = "2014-04-13";
print $date;
print "<br>";
if (preg_match('/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/', $date, $regs)) {
    echo "$regs[3].$regs[2].$regs[1]";
} else {
    echo "Format invalid i dates: $date";
}
?>
<?php
//Të shkruhen PHP RegEx që manipulojnë dhe kontrollojnë shkrim të caktuar të numrave si p.sh. IP adresë, ID numër.
$var = "127.0.0.1";
echo "<br>";
if (preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $var)) {
    print "IP adresa '$var' është valide.";
} else {
    print "IP adresa '$var' nuk është valide.";
}
echo "<br>";
//per nje ID
$var = "213-25-5674";

if (preg_match('/^([0-9]{3}\-[0-9]{2}\-[0-9]{4})$|(^[0-9]{9}$)/', $var)) {
    print "SSN '$var' është valid.";
} else {
    print "SSN '$var' nuk është valid.";
}
echo "<br>";
//Të shkruhen RegEx të cilat kontrollojnë për rregulla të caktuar për manipulim me numra, p.sh. nr. te tel etj.
$var = "1-608-234-1234";

if (!preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $var)) {
    echo 'Ju lutem shkruani numrin e telefonit ne forme valide.';
} else {
    echo 'Numri ' . $var . ' eshte shkruar ne forme valide!';
}
echo "<br>";
$var = "-15.405";
if (preg_match("/^[+-]?[0-9]*\.?[0-9]+$/", $var)) {
    print "Numri i dhënë '$var' është valid.";
} else {
    print "Numri i dhënë '$var' nuk është valid.";
}

?>
<?php
//Të shkruhen PHP RegEx për të kontrolluar përmbajte të caktuara të stringjeve
echo "<br>";
$string = 'XYZ';
if (preg_match('/z/', $string)) {
    echo "Stringu '$string' permban ndonje 'z'!";
} else {
    echo "Stringu '$string' nuk permban ndonje 'z'!";
}
echo "<br>";
$string = 'test';
if (preg_match("/[[:alpha:]]/", $string)) {
    echo "Stringu '$string' permban ndonje shkronje!";
} else {
    echo "Stringu '$string' nuk permban te pakten nje shkronje!";
}

?>


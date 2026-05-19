<?php
/*
Operacionet:
1. Hapja
2.Leximi
3.Shkrimi
4.Mbylllja
*/
//
// 1. hapja e fajllit
//The readfile() function is useful if all you want to do is open up a file and read its contents.
//returns content and the size of text
echo readfile("file.txt");
echo "<br>";

//fopen()
$myfile = fopen("file.txt", "r") or die("Unable to open file!");

//parametri i pare eshte adresa e fajllit, parametri i dyte numri maksimal i bajtave
echo fread($myfile,filesize("file.txt"));
//fclose() e mbyll nje fajll te hapur

fclose($myfile);

echo "<br>";

//fgets() - lexon nje rresht nga fajlli
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
echo "<br>";
echo "pas thirrjes se dyte  <br>".fgets($myfile);
fclose($myfile);
echo "<br>";
//feof() - check end of file
echo "LEXIMI ME FGETS() <br> ";
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
echo "<br>";
//fgetc() - lexon nga nje karakter
echo "LEXIMI ME FGETC() <br> ";
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);

//KRIJIMI I FAJLLIT
$krijo = fopen("testfile.txt", "w");
//fwrite() perdoret per te shkruar ne fajll
$txt = "studenti 1\n";
fwrite($krijo, $txt);
$txt = "studenti 3\n";
fwrite($krijo, $txt);
fclose($krijo);
// ne modin w, nese hapim te njejtin fajll dhe shenojme diqka, permbajtja e vjeter behet override
$krijo = fopen("testfile.txt", "w");
$txt = "studenti 5\n";
fwrite($krijo, $txt);
fclose($krijo);

$append = fopen("testfile.txt", "a");
$txt = "studenti me append\n";
fwrite($append, $txt);
fclose($append);

//Nese e hapim tani e mbishkruajme permbajtjen e meparshme
/*$krijo = fopen("testfile.txt", "w");
//fwrite() perdoret per te shkruar ne fajll
$txt = "permbajtja 1\n";
fwrite($krijo, $txt);
$txt = "permbajtja 2\n";
fwrite($krijo, $txt);
fclose($krijo);*/

 //Fshierja e fajllit
 unlink('testfile.txt');  

echo "File deleted successfully";  
?>
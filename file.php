<?php 
//LEXIMI NE FILE
readfile("text.txt");
echo "<br>";
//metoda 1. - leximi i komplet file
echo filesize("text.txt");

echo "<br>";

//meotda 2. - leximi ne dy sesione
$file = fopen("text.txt", "r") or die("Unable to open file!");//(file, modi: read, write, append)
//die -> if first part cant be done, put the message "Unable to open file!"
echo fread($file, filesize("text.txt")); //not void, return type
fclose($file); //duhet me mbyll session

echo "<br>";

//metoda 3. - leximi rresht pas rreshti
$file = fopen("text.txt", "r") or die("Unable to open file!");
// echo fgets($file);
//echo fgets($file);
while(!feof($file)){
    echo fgets($file). "<br>"; //fgetc -> per karaktera
}
fclose($file);

//end of file? -> feof($file);

//KRIJIMI I FILE
$file = fopen("newtext.txt", "w") or die ("Unable to open file!");
$txt = "Hello World!";
fwrite($file, $txt);
fclose($file);

//write
$file = fopen("newtext.txt", "w") or die ("Unable to open file!"); //rewrites old text
$txt = "Content i ri i file\n";
fwrite($file, $txt);
fclose($file);

//append
$file = fopen("newtext.txt", "a") or die ("Unable to open file!"); //rewrites old text
$txt = "Content i ri i file\n";
fwrite($file, $txt);
fclose($file);
unlink("newtext.txt");

//file_exists
?>
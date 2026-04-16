<?php 
//1. Bredhi:
for($i =0; $i<10; $i++){
    for($j=0; $j<$i; $j++){
        echo "*";
    }
    echo "<br>";
}
for($i =10; $i>0; $i--){
    for($j=$i; $j>0; $j--){
        echo "*";
    }
    echo "<br>";
}

/*2. Eshte dhene vargu ne vijim: $x = array(1, 2, 3, 4, 5); Te largohet nje element (cilido) nga vargu i dhene. 
Pasi te largohet elementi, vargu te paraqitet ne forme normale.
Pritet: array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
array(4)  [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) */
echo "<br>";
$x = array(1,2,3,4,5);
var_dump($x);
array_pop($x);
echo "<br>";
var_dump($x);
//array_splice($array, $start, $deleteCount, $itemsToAdd)
//Te shkruhet nje PHP funksion, i cili kontrollon nëse nje fjale e dhene eshte POLINDROM
echo "<br>";
function Polindrome($string){
    $string = strtolower($string);
    $array = str_split($string);
    $array1 = array_reverse($array);
    print_r($array1);
    echo "<br>";
    print_r($array);
    for($i=0; $i<count($array1); $i++){
        if(!($array1[$i] == $array[$i])){
            echo $array[$i] .  "<br>";
            echo $array1[$i] . "<br>";
            echo "Fjala nuk eshte Polindrom.";
        return;}
    }
    echo "<br> Fjala $string eshte polindrom.";
}
Polindrome("Ana");

//new functions string: strtolower, strtoupper, str_split, strlen(index 1), strpos(index 0)
//new functions array: array_splice, array_reverse, count(array), unset(array) -> destroy, array_push, array_pop
//other functions: gettype()-> string, is_int() -> bool, settype

/*3. Te shkruhet nje klase qe e paraqet mesazhin “Lenda PHP”, ku ‘PHP eshte nje vlere 
e argumentit te nje metode brenda klasës.*/
class PHP{
    function PHP($PHP){
        echo "<br> This is $PHP";
    }

}
$PHP = new PHP;
$PHP->PHP("PHP");
echo "<br>";

/*4. Të krijohet një klasë e cila përshin variabla të krijuara në të (private). Vlerat e seciles variabel te ruhen 
ne nje array dhe ne fund te shtypen dy vargje me vlera te ndryshme.*/
class ushtrimi4{
    private $v1;
    private $v2;
    private $v3;
    private  $arr = [];

    function __construct($v1, $v2, $v3){
        $this->v1 = $v1;
        $this->v2 = $v2;
        $this->v3 = $v3;
    }
    function makearray(){
       array_push($this->arr, $this->v1 );
       array_push($this->arr, $this->v2 );
       array_push($this->arr, $this->v3 );
       echo "Vargu:";
       foreach($this->arr as $i){
        echo $i . " ";
       }
    }
}
$Obj = new ushtrimi4(1, 2, 4);
$Obj1 = new ushtrimi4(1, 2, 5);

$Obj->makearray();
echo "<br>";
$Obj1->makearray();

/*5. Te shenohet nje RegEx e cila validon numra ne formatin 1-608-234-1234.*/
//function for regex: preg_match($pattern, $number) -> outputs true or false
echo "<br>";
$pattern = '/^\d-\d{3}-\d{3}-\d{4}\.$/';
echo $pattern;

/*6. Te deklarohet nje element ne html qe e pranon tekst dhe nje buton. Kur klikohet butoni, kerkohet ne databaze e ka user qe e ka Id-ne 
e shkruar ne text elementin. Nese gjen rezultat kthen mesazhin emrin dhe mbiemrin e userit, perndryshe kthen mesazhin: ska asnje rekord.*/
?>
<?php
echo "<br>";
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //$_SERVER['REQUEST_METHOD'] can either be GET(when first accessed the page) or
    //can be POST(submited from the form) or REQUEST(all of them bro)
    $searchId = $_POST['userId']; //$_POST get whatever the user put inside the tag that had the name = 'userId' -> 
    // <input type="text" name="userId">
    $found = false;

    // open and read the file line by line
    $file = fopen("Detyra.txt", "r");
    
    while (!feof($file)) {
        // split each line by comma → [id, emri, mbiemri]
        $line = fgets($file);
        $parts = explode(",", trim($line));
        
        $id     = $parts[0];
        $emri   = $parts[1];
        $mbiemri= $parts[2];

        // check if this line's id matches what user typed
        if ($id == $searchId) {
            echo $message = "Emri: $emri, Mbiemri: $mbiemri";
            $found = true;
            break; // stop looking, we found them
        }
    }
    
    fclose($file);

    if (!$found) {
        echo $message = "Ska asnje rekord.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="">
        <input type="text" name="userId" placeholder="Shkruaj ID...">
        <button type="submit">Kerko</button>
    </form>

</body>
</html>
<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="">
        <input type="text" name="n_ID" placeholder="Shkruaj numrin n...">
        <button type="submit">Paraqit tabelen</button>
    </form>

</body>
</html>

<?php //7.
echo "<br>";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $n = $_POST['n_ID'];
for($i=0; $i<$n; $i++){
    for($j=0; $j<$n; $j++){
        echo (($j+$i)%$n)+1 . ",";
    }
    echo "<br>";
}
}
?>
</br></br>
<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="">
            <table>
            <tr>
                <td>Emri</td>
                <td><input type="text" name="name_ID" placeholder="Emri"></td>
</tr></br></br>
<tr>
    <td>Mbiemri</td>
    <td><input type="text" name="mbiemer_ID" placeholder="Mbiemri"></td>
</tr></br></br>
<tr>
    <td>Data e lindjes</td>
    <td><input type="date" name="date_ID" placeholder="01/01/2000"></td>
</tr>
<tr>
    <td><button type="submit"> Kalkulo vitet</button></td>
</tr>
</table>
</form>

<?php //8. 
/*
echo "<br>";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $birth = $_POST['date_ID'];
    $now = date("Y-m-d");
    $birth = explode("-", trim($birth));
    $now = explode("-", trim($now));
    $age = $now[0]-$birth[0];
  if ($now[1] < $birth[1] || ($now[1] == $birth[1] && $now[2] < $birth[2])) {
        $age--;
    }
    unset($birth);
    echo "Ju i keni: " . $age . " vjeç.";
    echo "<br>";
} */
?>

<?php //9. per regex e bon funksionin me preg_match("regex_pattern", the value itself)
//file funct: fgetc, fgets, fwrite(file, text), fopen, feof(loop), fread(file, filesize(file)), fclose
//unlink(file) --> delete
$regex = '/^[0-9]{2}\.[a-zA-Z]{3}\.[0-9]{2}\-[0-9]{3}\!$/';
//preg_match('pattern', $text, $matches(word like 2026 or it looks inside pattern))
/*<? php
$teksti = 'Eshte [nje] provim [shume] ji duhur per kete [lende].';
preg_match('#\[( .* )\]#', $teksti, $match);
print $match[1]; -> match[0] takes all the regex, match[1] -> only (.*). Output: nje] provim [shume]]i duhur per kete [lende
now (.*)-> biggest chunk possible while (.*?) -> smallest chunk possible
?>*/

//include_once/include -> script continues after warning
//require, require_once -> script stops after fatal error
//include_once/require_once -> script will be loaded only once, no matter how many times its called
//require/include -> script will load every single time it is called

//const: const name = value;
//define('name', value);
?>
</br></br>
<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Data 1:</td>
            <td><input type="date" name="date_in"></td>
</tr></br></br>
<tr>
                    <td>Data 2:</td>
            <td><input type="date" name="date_on"></td>
</tr></br></br>
<tr>
            <td><button type="submit">Sa eshte diferenca?</button></td>
</tr>
</table>
        </form>
    </body>
    </html>

    <?php //10. data - data
    echo "<br>";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data1 = $_POST['date_in'];
        $data2 = $_POST['date_on'];
        $data1 = explode("-", trim($data1));
        $data2 = explode("-", trim($data2));
       $year = $data1[0] - $data2[0];
$month = $data1[1] - $data2[1];
$day = $data1[2] - $data2[2];

// If days are negative, borrow from months
if ($day < 0) {
    $month--;
    $day += 30; // Rough estimate, which is why DateTime is better!
}

// If months are negative, borrow from years
if ($month < 0) {
    $year--;
    $month += 12;
}

echo "Vite: $year, Muaj: $month, Dite: $day";
    }

    /*if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Create DateTime objects from the inputs
    $d1 = new DateTime($_POST['date_in']);
    $d2 = new DateTime($_POST['date_on']);

    // This one line does all the complicated math for you
    $interval = $d1->diff($d2);

    echo "Diferenca eshte: <br>";
    echo "Vite: " . $interval->y . "<br>";
    echo "Muaj: " . $interval->m . "<br>";
    echo "Dite: " . $interval->d;
} */

    //date('h', 'H', 'Y-m-d', 'd', 'D', 'Y', 'y')
    ?>

    <?php
$filename = "studentet.php";
$file = fopen($filename, "w");

if ($file) {
    $content = "Emri: Filan, Mbiemri: Fisteku, Fakulteti: Shkenca Kompjuterike";
    fwrite($file, $content);
    fclose($file);
    echo "Skedari u krijua dhe të dhënat u shkruan me sukses.<br><br>";
}
if (file_exists($filename)) {
    echo "Emri i skedarit: " . $filename . "<br>";
    echo "Madhësia e skedarit: " . filesize($filename) . " bytes<br>";
    $permbajtja = file_get_contents($filename);
    echo "Përmbajtja e skedarit: " . $permbajtja;

} else {
    echo "Skedari nuk ekziston!";
}
//file_put_contents($filename, ""); -> me e bo empty
//PHP- Hypertext Preprocessor
?>


<?php //COOKIES
// We are making a cookie named "perdoruesi" with the value "Brotato"
// it will last for 1 hour (3600 seconds)
setcookie("perdoruesi", "Brotato", time() + 3600, "/");
?>

<?php
if (isset($_COOKIE['perdoruesi'])) {
    echo "Përshëndetje përsëri, " . $_COOKIE['perdoruesi'];
} else {
    echo "Ti je një vizitor i ri!";
}

//string -> array explode()
//array -> string implode()

$reg = '/^[a-zA-Z0-9\.\_\-]+\@[a-z]{3,7}\.[a-z]{2,5}$/';
// /^[^0-9] -> nuk guxon me qen numer

//array_sum and count(array) always uses values in associative arrays, array_keys -> extract keys
//ksort() -> sort by key, asort -> sort by value, sort() -> in associative destroys keys
/* foreach me vargje asociative:
    foreach ($studentet as $emri => $nota) {
    if ($nota > $mesatarja) {
        echo $emri . ": " . $nota . "<br>";
    }
}*/

$reg2 = '/^[a-z]{2,}\.[a-z0-9]{2,}\@[a-z]{7}\.[a-z]{3}\-[a-z]{2}\.[a-z]{3}$/'
$email = "emri.mbiemri@student.uni-pr.edu";
if(preg_match($reg2, $email)){
    echo "yay";
}
else{
    echo "no";
}

//__toString() -> mi kthy nstring funksioni
?>
<? //Det
$var = " "
if(empty(trim($var))){
    echo "Nuk keni submit kurgjo.";
}
echo "Bravo!";

//Det

?>

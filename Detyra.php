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
//new functions array: array_splice, array_reverse, count(array)
//other functions: gettype()-> string, is_int() -> bool

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
    
    while (($line = fgets($file)) !== false) {
        // split each line by comma → [id, emri, mbiemri]
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

<?php //regex tndryshem


?>
<?php 
//user defined datatype
//class eshte template

//Të definohet një klasë në PHP, e cila se pari i definon vetitë, pastaj metodat dhe pas
//krijimit të objekteve i përdorë këto metoda.

class Klasa {

    //property
    public $vetia1;
    public $vetia2;
    public $vetia3;

    //metodat - functions
    public function funksioni1(){
        echo "Eshte thirrur funksioni i pare!";
    }
    public function funksioni2(){
        echo "Eshte thirrur funksioni i dyte!";
    }
    public function shuma($vetia3,$y){
        $x = $this ->vetia3;
        return $x + $y;
    }
}

//Vetite/metodat publike mund te perdoren edhe jashte klases direkt

//Krijimi i instancave/objekteve te klases
$objekti1 = new Klasa;
$objekti2 = new Klasa;
$objekti1 -> vetia1 = 'Vetia e pare e objektit 1';
$objekti2 -> vetia1 = 'Vetia e pare e objektit 2';

$objekti1 -> vetia2 = 'Vetia e dyte e objektit 1';
$objekti2 -> vetia2 = 'Vetia e dyte e objektit 2';

$objekti1 -> vetia3 = 10;
$objekti2 -> vetia3 = 20;

echo $objekti1 -> vetia2 . "<br/>";
echo $objekti2 -> vetia1 . "<br/>";

$objekti1 ->funksioni1();
$objekti2 -> funksioni1();

echo "shuma nga thirrja e pare: " . $objekti1->shuma(2,2) . "<br/>";
echo "shuma nga thirrja e dyte: " . $objekti2->shuma(3,5) . "<br/>";


class Librat {
    //Modifikatoret qe ndalojne casjen direkte jashte klases
    private $cmimi;
    protected $titulli;
    private $prop1;
    //konstruktori - metode\funksion brenda klases qe ekzekutohet automatikisht gjate krijimit te objektit 
    //pergjegjes per krijimin e objektit
    //metode publike /patjeter
    function __construct($param)
    {
        $this->prop1 = $param;
    }
    function setcmimi($param){
        $this->cmimi = $param;
    }
    function settitulli($param){
        $this->titulli = $param;
    }

    function getcmimi(){
        return $this->cmimi;
    }

    function gettitulli(){
        echo $this->titulli . "<br>";
    }
}

    //objektet
    $databaza = new Librat("test");
    $matematika = new Librat("test");

    $databaza -> setcmimi(25);
    $databaza -> settitulli("Bazat relacionale");

    $matematika -> setcmimi(15);
    $matematika -> settitulli("Matematika I");
    //$matematika -> titulli = "Algjebra";

    $databaza -> gettitulli();
    $matematika ->gettitulli();

    echo $databaza -> getcmimi() + 5 . "<br>";
    echo $matematika->getcmimi();

    // $databaza ->cmimi = 30;
    // echo $databaza ->cmimi;

    class A {
        public $emri;
        private $id;
        protected $mosha;

        function funk_A(){
            echo "eshte thirrur funksioni nga Klasa A <br><br>";
        }
    }

    class B extends A {
        public $vetia_B;
        function funk_B(){
            echo "Eshte thirrur funksioni nga vetia B <br>";
        }
        function setMosha($mosha){
            $this->mosha = $mosha;
        }
        function getMosha(){
            echo $this->mosha . "<br>";
        }
    }

    $objektiB = new B;
    $objektiB -> funk_A();
    $objektiB ->setMosha(21);
    $objektiB -> getMosha();
?>
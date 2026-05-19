<?php
class A
{
var $atributi_A;
function funk_A()
{
print "<br/>". $this->atributi_A;
}
}
class B extends A
{
    var $atributi_B;
    function funk_B()
    {
    print "<br/>". $this->atributi_B;
    }
}
    $Obj_B = new B();
    $Obj_B ->atributi_A =2;
    $Obj_B->funk_A();
    $Obj_B->atributi_B=3;
    $Obj_B->funk_B();

    //Kontrollimi I dukshmërisë përgjatë trashëgimit me private dhe protected
    class A1
    {
    private function operation1()
    {
    echo "operation1 called";
    }
    protected function operation2()
    {
    echo "operation2 called";
    }
    public function operation3()
    {
    echo "operation3 called";
    }
    }
    class B1 extends A1
    {
    function __construct()
    {
    //$this->operation1();
    print "<br/>";
    $this->operation2();
    print "<br/>";
    $this->operation3();
    print "<br/>";
    }
    }
    $b = new B1;
    //$a = new B1;


 
      class A2
    {
    public $attribute = "default value";
   function operation()
    {
    echo "Something<br />";
    echo "The value of \$attribute is $this->attribute<br />";
    }
    }

    class B2 extends A2 {
        var $atr = "default from B2";

    }

    $a2 = new A2;
    $b2 = new B2;
   
    $b2->attribute = "mbishkruaj";
    echo 
    $b2->operation();
    $a2->operation();

    /*
    Te shkruhet nje klase qe e paraqet mesazhin ‘’Pershendetje, une jam Petriti!, ku
    ’Petriti’ eshte nje vlere e argumentit te nje metode brenda klasës.
    */ 
    class user_message {
        public $message = 'Pershendetje, une jam ';
        public function introduce($name)
        {
        return $this->message.$name."<br />";
        }
        }
        $mymessage = New user_message();
        echo $mymessage->introduce('Petriti!');

        //Kalkulatori
        class Kalkulatori {
            private $_fval, $_sval;
            public function __construct( $fval, $sval ) {
            $this->_fval = $fval;
            $this->_sval = $sval;
            }
            public function mledh() {
            return $this->_fval + $this->_sval;
            }
            public function zbrit() {
            return $this->_fval - $this->_sval;
            }
            public function shumezo() {
            return $this->_fval * $this->_sval;
            }
            public function pjesto() {
            return $this->_fval / $this->_sval;
            }
            }
            $mycalc = new Kalkulatori(12, 6);
            echo $mycalc-> mledh(); // Tregon 18
            echo '<br />'.$mycalc-> shumezo(); // Tregon 72 
            echo '<br />'.$mycalc-> zbrit(); // Tregon 6
            echo '<br />'.$mycalc-> pjesto(); // Tregon 2 

            //Metoda abrstrakte: deklarohet ne klasen  prind, implementohet ne klasen femije
            //Klasa abstrakte: klase e cila ka sepaku nje metode abstrakte

            // Parent class
            echo "<br>";
    abstract class Lenda {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function void_lenda() : string;
    //abstract public function lenda() : string;
  }
  
  // Child classes
  class lenda1 extends Lenda {
    public function void_lenda() : string {
      
      return "Eshte thirrur lenda $this->name!";
    }
  }
  
  class lenda2 extends Lenda {
    public function void_lenda() : string {
      return "Eshte thirrur lenda $this->name!";
    }
  }
  
  class lenda3 extends Lenda {
    public function void_lenda() : string {
      $vartest = "prej lendes 3";



      return "Eshte thirrur lenda $this->name!" . $vartest;
    }
  }
  
  // Create objects from the child classes
  $lenda1 = new lenda1("Matematike");
  echo $lenda1->void_lenda();
  echo "<br>";
  
  $lenda2 = new lenda2("Databaze");
  echo $lenda2->void_lenda();
  echo "<br>";
  
  $lenda3 = new lenda3("PHP");
  echo $lenda3->void_lenda();
 ?>
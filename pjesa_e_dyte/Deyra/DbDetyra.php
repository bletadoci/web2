<? 
/*
Te krijohet nje fajll me detajet e konektimit me bazen e te dhenave. Kete fajll e perdoni ne nje
fajll tjeter ne te cilin do te shfaqni ne forme tabelare te dhenat e Useri (emer, mbiemer, id) nese
supozojme qe User eshte nje tabele ne databazen tone.*/

class Database{
    private $conn;
    function __contruct(){
        try{
        $this->conn = new PDO("mysql: host= 'localhost', dbname='dbname', 'username', 'password', charset='utf8mb4",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        }
        catch(PDOException $e){
            die("BAD" . $e.getMessage());
        }
        
    }

    }
    function getConnection(){
        return $this->conn;
    }
}


?>
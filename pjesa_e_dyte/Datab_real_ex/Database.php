<? class Dabatase{
    private $host ='localhost';
    private $dbname = 'db';
    private $username = 'host';
    private $password = '123';
    charset= 'utf8mb4';
    private $conn;

    public function __contruct(){
        try{
        $this->conn = new PDO("mysql: host={$this->host}, dbname={$this->dbname}, $this->username, $this->password", charset={this->charset});
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, ERRMODE_EXCEPTION);
        this->conn-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //setAttribute(PDO:: dbname, "dbname")
        }
        catch(PDOException $e){
            die("Connection failed". $e.getMessage());
        }
    }
    public function getConnection(){
        return $this->conn; //nfront thirret
    }
    }?>
<?class Test{
    /*private user;
    private ID;
    private email;
    private kursi;
    private dataa;
    private descriptioni; you dont really need these*/
    private $conn;

    function __construct($conn){ //e merr prej frontit kur te thirr getConnection/better this way oooo:P
        $this->conn = $conn;
    }

    public function CreateTable(){
        try{
            $create = "CREATE TABLE User(
            ID INT AUTO_INCREMENT PRIMARY KEY,
            user VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            kursi VARCHAR(255),
            descriptioni TEXT,
            dataa DATE NOT NULL
            )";

            $this->conn->execute($create); //no need per prepare static data :P
        }
        catch(PDOException $e){
            die("Something went wrong!" . "<br>" .  $e.getMessage());
        }

    }

    public function InsertTable($ID, $user, $email, $kursi, $descriptioni, $dataa){
        try{
        $insert = "INSERT INTO User(ID, user, email, kursi, descriptioni, dataa)
        VALUES (:ID, :user, :email, :kursi, :descriptioni, :dataa)";
        $prepare = $this->conn->prepare($insert);
        $prepare->execute([
            ":ID" => $ID,
            ":user" => $user,
            ":email" => $email,
            ":kursi" => $kursi,
            ":descriptioni" => $descriptioni
        ])
        echo "<br>Success!";
        }
        catch(PDOException $e){
            die("Something went wrong!" . "<br>" . $e.getMessage());
        }
    }

    public function UpdateTable($ID, $user, $email, $kursi, $descriptioni, $dataa){
        try{
        $update = "UPDATE User SET ID = :ID, user = :user, email = :email, kursi = :kursi, 
        descriptioni = :descriptioni, dataa = :dataa
        WHERE ID = :ID";

        $prepare = $this->conn->prepare($update);
        $prepare->execute([
            ":ID" => $ID,
            ":user" => $user,
            ":email" => $email,
            ":kursi" => $kursi,
            ":descriptioni" => $descriptioni
        ])
        echo "<br>U kry!";
    }
      catch(PDOException $e){
            die("Something went wrong!" . "<br>" . $e.getMessage());
        }
}

  public function getTable(){
        $table = $this->conn->query("SELECT * FROM User")
        $users = $table->fetchAll(); //this was default set
        //fetchAll for fetching all rows, fetch for only ONEEEE
        return $users;
    }

    public function ktheEvent($kolona, $vlera) {
    try {
        $allowed = ['ID', 'user', 'email', 'kursi', 'descriptioni'];
        
        if (!in_array($kolona, $allowed)) {
            die("Kolona e pavlefshme");
        }

        $sql = "SELECT * FROM Eventi WHERE $kolona = :vlera";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':vlera' => $vlera]);

        return $stmt->fetchAll();

    } catch (PDOException $e) {
        die("Gabim: " . $e->getMessage());
    }
}

 public function displayTable() {
        try {
            $users = $this->conn->query("SELECT * FROM User")->fetchAll(PDO::FETCH_ASSOC);

            echo "<table class='tabela'>";
            echo "<tr>
                    <th>ID</th>
                    <th>Titulli</th>
                    <th>Lokacioni</th>
                    <th>Data</th>
                    <th>Pershkrimi</th>
                </tr>";

            if (!empty($users)) {
                foreach ($users as $e) {
                    echo "<tr>";
                    echo "<td>" . $e['ID'] . "</td>";
                    echo "<td>" . $e['user'] . "</td>";
                    echo "<td>" . $e['email'] . "</td>";
                    echo "<td>" . $e['kursi'] . "</td>";
                    echo "<td>" . $e['descriptioni'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nuk ka Users?!.</td></tr>";
            }

            echo "</table>";

        } catch (PDOException $e) {
            die("Gabim gjate marrjes se Userit: " . $e->getMessage());
        }
    }

}

?>
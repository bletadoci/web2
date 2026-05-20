<? 
require_once("db.php");
$output = ""
if(isset($_POST['kerko'])){
    $sql = "SELECT * FROM students";
    $result mysql_query($con, $sql);
    
    echo "OK";
}
if(mysql_num_rows($result)>0){
    while($row = mysql_fetch_assoc($result)){
        $output .= "
        <tr>
        <td>" . $row['sid'] . "</td>
        <td>" .$row["sname"] . "</td>
        <td>" . $row ['lastname'] . "</td>
        </tr>"
    }
}
else{
    $output  .= "
    <tr><td colspan='3'> Nuk u kthy as nje rez nga db.</td></tr>";
    
}
echo $output; //testim
?>
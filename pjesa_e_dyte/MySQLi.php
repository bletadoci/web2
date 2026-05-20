flow:

STATIC DATA DOESNT NEED TO BE PREPARED

create connection -> prepare the query/query the query -> bind_param("si", var1, var2)
(var1 is a string, var2 is an integer) -> execute the PREPARED query/nothing (because this is static data) -> 
close the PREPARED query/free the queried query

everything written as mysqli_connect/prepare, mysqli_fetch_assoc, mysql_stmt_bind_param/execute, can be written
as $val = $conn->prepare(query)..

amo kur e bon me method type duhesh tparen me qit the mysqli_query($con, query)
$stmt = mysqli_prepare($conn, query)
mysqli_stmt_bind_param(...) -> vazhdon poshte

<?
//1. Method:
$conn = mysqli_connect("localhost", "root", "", "test_db");
$stmt = mysqli_prepare($conn, "INSERT INTO klientet (emri) VALUES (?)");
//(s = string, i = integer, d = double, b = blob)
mysqli_stmt_bind_param($stmt, "sisisiss", $emri,....);
mysqli_stmt_execute($stmt);

//2: (best one - oop is always goated)
$conn = new mysqli("localhost", "root", "pass", "test_db");

// 1. Prepare
$stmt = $conn->prepare("INSERT INTO klientet (emri) VALUES (?)");

// 2. Bind
$stmt->bind_param("s", $emri);

// 3. Execute
$stmt->execute();

//Placeholders:
// PDO
$stmt = $pdo->prepare("UPDATE klientet SET emri = :emri WHERE id = :id");
$stmt->execute([':emri' => $emri, ':id' => $id]);

// MySQLi
$stmt = $conn->prepare("UPDATE klientet SET emri = ? WHERE id = ?");
$stmt->bind_param("si", $emri, $id);  // s = string, i = integer
$stmt->execute();
?>
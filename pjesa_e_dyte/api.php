<?php
// Database config
$host = "localhost";
$dbname = "test_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$action = $_POST['action'] ?? '';

switch ($action) {
    
//look
    case 'kerko':
        try {
            $stmt = $pdo->query("SELECT * FROM klientet ORDER BY id DESC");
            $rows = $stmt->fetchAll();
            
            if (empty($rows)) {
                echo "<p>No records found.</p>";
                break;
            }
            
            echo "<table border='1' cellpadding='8'>";
            echo "<tr><th>ID</th><th>Emri</th><th>Actions</th></tr>";
            
            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['emri']) . "</td>";
                echo "<td><button onclick='fillForm(" . $row['id'] . ", \"" . htmlspecialchars($row['emri']) . "\")'>Select</button></td>";
                echo "</tr>";
            }
            
            echo "</table>";
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        break;
        
//save
    case 'ruaj':
        $emri = $_POST['emri'] ?? '';
        
        if (empty($emri)) {
            echo "<p style='color:red'>Emri cannot be empty!</p>";
            break;
        }
        
        try {
            $stmt = $pdo->prepare("INSERT INTO klientet (emri) VALUES (:emri)");
            $stmt->execute([':emri' => $emri]);
            
            echo "<p style='color:green'>Saved successfully! ID: " . $pdo->lastInsertId() . "</p>";
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        break;

    case 'edit':
        $id = $_POST['id'] ?? '';
        $emri = $_POST['emri'] ?? '';
        
        if (empty($id) || empty($emri)) {
            echo "<p style='color:red'>ID and Emri are required!</p>";
            break;
        }
        
        try {
            $stmt = $pdo->prepare("UPDATE klientet SET emri = :emri WHERE id = :id");
            $stmt->execute([
                ':emri' => $emri,
                ':id' => $id
            ]);
            
            echo "<p style='color:green'>Updated successfully! Rows affected: " . $stmt->rowCount() . "</p>";
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        break;

    case 'delete':
        $id = $_POST['id'] ?? '';
        
        if (empty($id)) {
            echo "<p style='color:red'>ID is required!</p>";
            break;
        }
        
        try {
            $stmt = $pdo->prepare("DELETE FROM klientet WHERE id = :id");
            $stmt->execute([':id' => $id]);
            
            echo "<p style='color:green'>Deleted successfully! Rows affected: " . $stmt->rowCount() . "</p>";
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        break;

    default:
        echo "<p>Unknown action.</p>";
}
?>
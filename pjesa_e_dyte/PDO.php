Hierarchy:

->new PDO(object attr "mysql: host={dbname)
var = pdoobj->prepare (query: SELECT (*)email; FROM users; WHERE id = ':id' -> placeholder dmth/ ose id = ?
UPDATE users; SET name = ':name'; WHERE id = ':id'
INSERT INTO users (name, email, age.. all columns/ifnot then null) VALUES (?, ?, ?..) -> placeholder
INSERT INTO Eventi (Titulli, Lokacion, Data, Pershkrimi) VALUES (:titulli, :lokacioni, :data, :pershkrimi)
DELETE FROM users; WHERE date < GETDATE()
DROP Table)

  SELECT name, email           -- 5. Pick columns
    FROM users                  -- 1. From table
    WHERE status = :status      -- 2. Filter rows
    ORDER BY name ASC           -- 6. Sort results

    SELECT u.name, u.email, o.total
    FROM users AS u          -- u = users -> alias
    JOIN orders AS o ON u.id = o.user_id   -- o = orders
    WHERE o.status = 'completed'

    SELECT 
        u.id AS user_id,              -- column alias
        u.name AS full_name,          -- column alias
        u.email,
        COUNT(o.id) AS order_count,   -- aggregate with alias
        SUM(o.total) AS total_spent   -- aggregate with alias
    FROM users AS u                   -- table alias
    LEFT JOIN orders AS o ON u.id = o.user_id   -- table alias
    WHERE u.status = :status
    GROUP BY u.id, u.name, u.email
    HAVING COUNT(o.id) > :min_orders
    ORDER BY total_spent DESC   

    
    *****

    SELECT 
        country,                    -- group key
        COUNT(*) AS total,          -- aggregate per group
        AVG(age) AS avg_age         -- another aggregate
    FROM users
    WHERE status = :status
    GROUP BY country                -- bucket by country
    HAVING COUNT(*) > :min          -- filter groups
    ORDER BY total DESC             -- sort results by total

    *****



var->execute([array of key value -> nese ne prepare e ke bo id = ':id' -> qetu osht where you define])
otherwise execute munet si array me i definu me ren ([$value1, $value2..]) -> qitu i kallxon prsh me front

result = var->fetch(PDO::FETCH_ASSOC) -> ASSOC  //_NUM->normal array/_BOTH -> with index 0(num), 
THEN INDEX KEY/_OBJ -> stdClass


->fetchAll() gives you ALL rows as a nested array
$users = $stmt->fetchAll();
$users = [
['name' => 'Alice', 'email' => 'alice@example.com'],
['name' => 'Bob', 'email' => 'bob@example.com'],

->fetch() -> ONLY ONE ROW

->query() static -> SELECT.. FROM..
$stmt = $pdo->prepare("SELECT name, email FROM users ORDER BY Emri ASC");
$result = query($stmt)




<? $pdo = new PDO(
    'mysql:host=localhost;dbname=mydb;charset=utf8mb4',
    'username', //qetu e shkrun
    'password',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] //standard, this means everything enveloped in try catch
); 

// 1. Include the tool that reads .env files (usually installed via Composer)
require_once __DIR__ . '/vendor/autoload.php';

// 2. Load the environment variables from your root folder
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'bob.env');
$dotenv->load();

// 3. Use the ACTUAL values securely via the $_ENV superglobal
try {
    $pdo = new PDO(
        "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8mb4",
        $_ENV['DB_USER'], // Evaluates to 'root'
        $_ENV['DB_PASS'], // Evaluates to 'my_real_secure_password'
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
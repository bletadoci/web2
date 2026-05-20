<?$pdo = new PDO(
    'mysql:host=localhost;dbname=mydb;charset=utf8mb4',
    'username', //qetu e shkrun
    'password',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] //standard, this means everything enveloped in try catch
); 
?>
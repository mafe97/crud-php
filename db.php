<?php
// Define database connection parameters
$dsn = 'mysql:host=localhost;dbname=testdto'; // Data Source Name
$username = 'root';  // Your MySQL username
$password = 'new-password';  // Your MySQL password


echo "DSN: $dsn<br>";
echo "Username: $username<br>";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<?php
include 'db.php';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare an SQL statement with placeholders
    $sql = 'DELETE FROM users WHERE username = :username';
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $username = 'newuser';
    $stmt->bindParam(':username', $username);

    // Execute the statement
    $stmt->execute();

    echo "Record deleted successfully";
} catch (PDOException $e) {
    echo "Delete failed: " . $e->getMessage();
}
?>

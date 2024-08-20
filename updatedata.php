<?php
include 'db.php';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare an SQL statement with placeholders
    $sql = 'UPDATE users SET email = :email WHERE username = :username';
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $email = 'updateduser@example.com';
    $username = 'fda';
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);

    // Execute the statement
    $stmt->execute();

    echo "Record updated successfully";
} catch (PDOException $e) {
    echo "Update failed: " . $e->getMessage();
}
?>


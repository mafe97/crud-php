<?php
include 'db.php';

try {
    // Prepare the SQL statement
    $sql = 'INSERT INTO users (username, email) VALUES (:username, :email)';
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);

    // Set values for the parameters
    $username = 'newuser';
    $email = 'newuser@example.com';

    // Execute the statement
    $stmt->execute();
    echo "Insert successful!";
} catch (PDOException $e) {
    echo "Insert failed: " . $e->getMessage();
}
?>

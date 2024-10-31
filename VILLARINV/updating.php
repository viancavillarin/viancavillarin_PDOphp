<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

<?php
include 'path/to/config/dbconfig.php';

try {
    $user_id = 1; // Specify the ID of the user you want to update
    $new_name = "Ethan Rambutan";
    $new_email = "ethanrambutan@example.com";

    $sql = "UPDATE Users SET name = :name, email = :email WHERE user_id = :user_id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $new_name);
    $stmt->bindParam(':email', $new_email);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);


    if ($stmt->execute()) {
        echo "User record updated successfully.";
    } else {
        echo "Failed to update user record.";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

</body>
</html>

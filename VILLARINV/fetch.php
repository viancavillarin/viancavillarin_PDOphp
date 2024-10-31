<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single User Data</title>
</head>
<body>

<?php
include 'path/to/config/dbconfig.php';

try {
    $sql = "SELECT * FROM Users WHERE user_id = 1";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($user);
    echo "</pre>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

</body>
</html>

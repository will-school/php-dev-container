<?php

$test = "Test";
try {
    $mysqli = mysqli_connect("localhost:3000");
} catch (Exception $e) {
    $mysqli = "Refused: " . $e;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
</head>
<body>
    <h1>/index.php</h1>
    <p>Edit index.php to get started</p>
    <p>
        <?php
            echo "Hello World <hr style=\"width: 100%\">";
            echo $mysqli;
            echo phpinfo()
        ?>
    </p>
</body>
</html>
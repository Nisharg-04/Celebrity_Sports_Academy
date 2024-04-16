<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("db.php");
    session_start();
    if(isset($_SESSION["email"])){
        session_destroy();
        echo "Logged out successfully";
        header("Location: index.php");
    }
    else{
        echo "You are not logged in";
    }
    ?>
</body>
</html>
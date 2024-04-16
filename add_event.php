<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_event</title>
</head>

<body>
    <?php
    require ("db.php");
    if (isset($_POST["title"]) && isset($_POST["description"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $sql = "INSERT INTO `event` (`title`, `description`) VALUES ('$title', '$description')";
        if (mysqli_query($conn, $sql) == TRUE) {
            echo "<script>alert('Event added successfully')</script>";
            echo "<script>location.href='dashboard.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    ?>
</body>

</html>
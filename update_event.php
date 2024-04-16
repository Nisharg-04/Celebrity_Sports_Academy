<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modify_event</title>
</head>

<body>
    <?php
    require ("db.php");
    if (isset($_POST["title"]) && isset($_POST["description"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];

        $find = "SELECT * FROM `event` WHERE `title` = '$title'";
        $result = mysqli_query($conn, $find);

        if (mysqli_num_rows($result) > 0) {

            $sql = "UPDATE `event` SET `description` = '$description' WHERE `event`.`title` = '$title'";
            if (mysqli_query($conn, $sql) == TRUE) {
                echo "<script>alert('Event updated successfully')</script>";
                echo "<script>location.href='dashboard.php'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script>alert('Event not found')</script>";
            echo "<script>location.href='dashboard.php'</script>";
        }
    }
    $conn->close();
    ?>
</body>

</html>
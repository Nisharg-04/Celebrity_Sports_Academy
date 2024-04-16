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
    if (isset($_POST["title"])) {
        $title = $_POST["title"];
        $find = "SELECT * FROM `event` WHERE `title` = '$title'";
        $result = mysqli_query($conn, $find);
        if (mysqli_num_rows($result) > 0) {

            $title = $_POST["title"];
            $sql = "DELETE FROM `event` WHERE `event`.`title` = '$title'";
            if (mysqli_query($conn, $sql) == TRUE) {
                echo "<script>alert('Event deleted successfully')</script>";
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
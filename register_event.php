<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require ("db.php");
    session_start();
    if (isset($_SESSION["email"]) && isset($_POST["event_id"])) {
        $insert_query = "INSERT INTO `user_event` (`event_id`, `user_id`) VALUES ('$_POST[event_id]', '$_SESSION[email]')";
        if (mysqli_query($conn, $insert_query)) {
            echo "<script>alert('Registration successful!')</script>";
            echo "<script>window.location.href='event.php';</script>";
            // header("Location: event.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        // echo "$_SESSION[email]";
        // echo $_POST["event_id"];
    } else {
        echo "You must be logged in to register for an event.";
    }
    ?>
</body>

</html>
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
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

        $sql = "INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `phone`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$phone', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('We have noticed you issue we will shortly contact you');</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>
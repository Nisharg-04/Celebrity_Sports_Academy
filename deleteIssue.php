<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deleting</title>
</head>

<body>
    <?php
    require ("db.php");
    if (isset($_POST["id"])) {
        $sql = "Update contactus set `solved`='1' where id=$_POST[id]";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record removed successfully from list!');</script>";
            echo "<script>window.location.href = 'issue.php';</script>";
        } else {
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>
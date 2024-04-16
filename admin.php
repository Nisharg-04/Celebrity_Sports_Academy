<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    <?php
    session_start();
    echo "<script>
    const pass = prompt('Please enter admin password to continue: ', 'password');
if (pass === 'admin') {";
    $_SESSION['admin'] = true;
    echo "
    window.location.href = 'dashboard.php';
} else {
    alert('Incorrect password! Please try again.');
    window.location.href = 'index.php';
}
    </script>";
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
    require ("db.php");
    session_start();



    // echo "email : " . $email;
    // echo "password : " . $password;
    

    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $find = "select * from `user` where `email` = '$email'";
        $result = $conn->query($find);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo md5($password);
            if ($row["password"] == md5($password)) {
                echo "Login successful";
                $_SESSION["email"] = $email;
                header("Location: index.php");
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "Email does not exist";
        }
    }
    $conn->close();
    ?>

    <div id="container">
        <div id="box">
            <div id="img-left-box">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis expedita odit totam veritatis officia
                quasi nobis ipsa ut placeat libero. Dolores aut modi placeat facere natus. Rerum magni veritatis
                dolorum.
            </div>
            <div id="left-box">
                <h3>WELCOME TO CELEBRITY SPORTS ACADEMY</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas consequatur labore a, incidunt
                    veritatis eaque dolore modi, doloremque inventore id, provident esse fugiat itaque ut quod culpa.
                    Rem, voluptatem iusto.</p>
            </div>

            <div id="right-box">
                <img src="./images/celebrity-sports-academy-high-resolution-logo-transparent.png" alt="logo">
                <h1 id="login-header">Login</h1>
                <p id="signup-p">Don't have an account? <a id="signup link" href="./registration.php">Create your
                        account</a> it takes
                    less than a mintue</p>
                <div id="input-box">
                    <form action="" method="post" id="inputForm">
                        <input type="text" name="email" class="input" placeholder="email">
                        <input type="password" name="password" class="input" placeholder="Password">
                        <button id="login-btn" type="submit" class="btn">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>

</body>

</html>
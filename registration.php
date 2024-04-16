<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "project");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST["fname"]) && isset($_POST["mname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["mobile"]) && isset($_POST["street"]) && isset($_POST["city"]) && isset($_POST["state"]) && isset($_POST["pincode"]) && isset($_POST["bloodgroup"]) && isset($_POST["emergencyMobile"]) && isset($_POST["password"]) && isset($_POST["gender"])) {
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $pincode = $_POST["pincode"];
        $bloodgroup = $_POST["bloodgroup"];
        $emergencymobile = $_POST["emergencyMobile"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];

        // echo "fname : " . $fname;
        // echo "mname : " . $mname;
        // echo "lname : " . $lname;
        // echo "email : " . $email;
        // echo "mobile : " . $mobile;
        // echo "street : " . $street;
        // echo "city : " . $city;
        // echo "state : " . $state;
        // echo "pincode : " . $pincode;
        // echo "bloodgroup : " . $bloodgroup;
        // echo "emergencymobile : " . $emergencymobile;
        // echo "password :" . $password;
        // echo "gender : " . $gender;
    
        $find = "select * from `user` where `email` = '$email'";
        $result = $conn->query($find);
        if ($result->num_rows > 0) {
            echo "Email already exists";
            $conn->close();
        } else {
            $sql = "INSERT INTO `user` (`fname`, `mname`, `lname`, `email`, `mobile`, `street`, `city`, `state`, `pincode`, `bloodgroup`, `emergencymobile`, `password`, `gender`) VALUES ('$fname', '$mname', '$lname', '$email', '$mobile', '$street', '$city', '$state', '$pincode', '$bloodgroup', '$emergencymobile', '".md5($password)."', '$gender');";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                session_start();
                $_SESSION["email"] = $email;
                header("Location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
    }
    ?>
    <div id="container">
        <form action="registration.php" id="form" method="post">

            <div id="box">

                <div id="registration">
                    <h1>Registration Form</h1>
                    <div id="img-logo">
                        <img src="./images/celebrity-sports-academy-high-resolution-logo-transparent.png" alt="logo">
                    </div>
                </div>

                <div id="basic-details">
                    <p>Basic Details</p>

                    <div id="name">
                        <p>Name:</p>
                        <input type="text" name="fname" id="fname-input" placeholder="First-name">
                        <input type="text" name="mname" id="mname-input" placeholder="Middle-name">
                        <input type="text" name="lname" id="lname-input" placeholder="Last-name">
                    </div>

                    <div id="gender">
                        <h6>Gender: </h6>
                        <select name="gender" id="gender-input">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="female">Other</option>
                        </select>
                    </div>
                </div>


                <div id="contact">
                    <p>Contact Details</p>

                    <div class="input">

                        <div id="email">
                            <label for="email-input">Email:</label>
                            <input type="email" name="email" id="email-input">
                        </div>

                        <div id="mobile">
                            <label for="mobile-input">Mobile:</label>
                            <input type="text" name="mobile" id="mobile-input">
                        </div>

                    </div>

                </div>

                <div id="address">
                    <p>Address</p>
                    <div class="input">

                        <div id="street">
                            <label for="street-input">Street</label>
                            <input type="text" name="street" id="street-input">
                        </div>

                        <div id="city">
                            <label for="city-input">City</label>
                            <input type="text" name="city" id="city-input">
                        </div>

                        <div id="state">
                            <label for="state-input">State</label>
                            <input type="text" name="state" id="state-input">
                        </div>

                        <div id="pincode">
                            <label for="pincode-input">Pincode</label>
                            <input type="text" name="pincode" id="pincode-input">
                        </div>

                    </div>

                </div>


                <div id="other">
                    <p>Other</p>

                    <div class="input">

                        <div id="bloodgroup">
                            <label for="bloodgroup-input">Blood Group</label>
                            <input type="text" name="bloodgroup" id="bloodgroup-input">
                        </div>
                        <div id="emergency">
                            <label for="emergency-mobile-input">Emergency Mobile</label>
                            <input type="text" name="emergencyMobile" id="emergency-mobile-input">
                        </div>

                    </div>

                </div>


                <div id="password">
                    <p>Create new password</p>

                    <div class="input">

                        <div id="password-div">
                            <label for="password-input">New password</label>
                            <input type="password" name="password" id="password-input">
                        </div>

                    </div>

                </div>

                <!-- <div id="submit">
                    <button class="btn"><a href="program_selection.html">Confirm and select programme</a></button>
                </div> -->

                <div id="submit">
                    <button class="btn" type="submit">Confirm and select programme</button>
                </div>

            </div>
        </form>
    </div>
    <script src="../Celebrity_Sports_Academy/registration.js"></script>
</body>

</html>
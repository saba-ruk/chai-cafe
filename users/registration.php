<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Chai Cafe | Register</title>
    <link rel="stylesheet" href="../assets/css/login2.css"/>
    <link rel="icon" type="image/x-icon" href="../logo.png"><!-- Favicon / Icon -->
    <style>
        .validation-message {
            color: red;
            font-size: 12px;
            display: none;
            margin: 0px;
        }
        .validation-message.visible {
            display: block;
        }
    </style>
</head>
<body>
    <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $create_datetime = date("Y-m-d H:i:s");
            $query    = "INSERT into `users` (username, password, email, create_datetime)
                        VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<script>
                        alert('You are registered successfully.');
                        window.location.href = 'login.php';
                    </script>";
            } else {
                echo "<div class='form'>
                        <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                    </div>";
            }
        } else {
    ?>
        <form class="form" action="" method="post" onsubmit="return validateForm()">
            <center>
                <img src="../logo.png" alt="" class="img img-fluid" style="width: 50px; height:50px"><br><br>
            </center>
            <input type="text" class="login-input" name="username" placeholder="Username" required minlength="4" maxlength="15" pattern="[A-Za-z0-9]+"/>
            <input type="email" class="login-input" name="email" placeholder="Email Address" required>
            <input type="password" id="password" class="login-input" name="password" placeholder="Password" required oninput="validatePassword()">
            <div id="validation-messages">
                <p class="validation-message" id="length-message">Password must be at least 8 characters long.</p>
                <p class="validation-message" id="number-message">Password must contain a number.</p>
                <p class="validation-message" id="special-message">Password must contain a special character.</p>
            </div>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link">Already have an account? <a href="login.php">Login here!</a></p>
            <hr/>
        </form>
    <?php
        }
    ?>
    <script>

function validatePassword() {
    var password = document.getElementById("password").value;
    var lengthMessage = document.getElementById("length-message");
    var numberMessage = document.getElementById("number-message");
    var specialMessage = document.getElementById("special-message");

    if (password.length >= 8) {
        lengthMessage.classList.remove("visible");
    } else {
        lengthMessage.classList.add("visible");
    }
    if (/[0-9]/.test(password)) {
        numberMessage.classList.remove("visible");
    } else {
        numberMessage.classList.add("visible");
    }

    if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
        specialMessage.classList.remove("visible");
    } else {
        specialMessage.classList.add("visible");
    }
}

function validateForm() {
    var password = document.getElementById("password").value;
    var lengthMessage = document.getElementById("length-message");
    var numberMessage = document.getElementById("number-message");
    var specialMessage = document.getElementById("special-message");

    var isValid = true;

    if (password.length < 8) {
        lengthMessage.classList.add("visible");
        isValid = false;
    } else {
        lengthMessage.classList.remove("visible");
    }

    if (!/[0-9]/.test(password)) {
        numberMessage.classList.add("visible");
        isValid = false;
    } else {
        numberMessage.classList.remove("visible");
    }

    if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
        specialMessage.classList.add("visible");
        isValid = false;
    } else {
        specialMessage.classList.remove("visible");
    }

    return isValid;
}



    </script>
</body>
</html>

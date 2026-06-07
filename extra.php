<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Chai Cafe Bhatkal</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="./assets/css/login2.css"/>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link rel="stylesheet" href="ham.css">
    <link rel="stylesheet" type="text/css" href="proto1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,355;1,355&display=swap" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <section id="header">
    <div class="imgg">
                <a href="#"><img src="logo.png" id="logo1" height="50px" width="60px"></a>
            </div>
            <div id="nav12">
            <ul id="navbar">
                <li><a class="active" href="#bgimage" href="index1.html"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                <li><a href="#content"><i class="fa-solid fa-address-book"></i> Contact</a></li>
                <li><a  href="#" onclick="showAlert()"><i class="fa-solid fa-book" ></i> Menu</a></li>

            <li class="nav-item">
                <a href="#" class="text-decoration-none" onclick="toggleLoginBox()"><img src="login2.png"  style="position:relative; bottom: 2px;"  height="23px" width="25px"></i> Login</a>
            </li>
            </ul>
        </div>
    </section>

    <section class="for">
    <div class="login-box" id="loginBox">
        <form class="form" action="users/index1.php" method="post">
            <center>
                <img src="logo.png" alt="" class="img img-fluid" style="width: 50px; height:50px">
            </center>
            <input type="text" class="login-input" name="username" placeholder="Username or Email" autofocus="true"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <input type="submit" value="Let's go" name="submit" class="login-button"/>
            <p class="link">Don't have an account? <a href="#" onclick="toggleRegisterBox()">Register here!</a></p>
        </form>
    </div>

    <div class="register-box" id="registerBox">
        <form class="form" action="" method="post" onsubmit="return validateForm()">
            <center>
                <img src="logo.png" alt="" class="img img-fluid" style="width: 50px; height:50px"><br><br>
            </center>
            <input type="text" class="login-input" name="username" placeholder="Username" required minlength="5" maxlength="15" pattern="[A-Za-z0-9]+"/>
            <input type="email" class="login-input" name="email" placeholder="Email Address" required>
            <input type="password" id="password" class="login-input" name="password" placeholder="Password" required oninput="validatePassword()">
            <div id="validation-messages">
                <p class="validation-message" id="length-message">Password must be at least 8 characters long.</p>
            </div>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link">Already have an account? <a href="#" onclick="toggleLoginBox()">Login here!</a></p>
            <hr/>
        </form>
    </div>
</section>
  <script>
function toggleLoginBox() {
            var loginBox = document.getElementById('loginBox');
            var registerBox = document.getElementById('registerBox');
            if (loginBox.style.display === 'block') {
                loginBox.style.display = 'none';
            } else {
                loginBox.style.display = 'block';
                registerBox.style.display = 'none';
            }
        }

        function toggleRegisterBox() {
            var registerBox = document.getElementById('registerBox');
            var loginBox = document.getElementById('loginBox');
            if (registerBox.style.display === 'block') {
                registerBox.style.display = 'none';
            } else {
                registerBox.style.display = 'block';
                loginBox.style.display = 'none';
            }
        }

        function validatePassword() {
            var password = document.getElementById('password').value;
            var lengthMessage = document.getElementById('length-message');
            lengthMessage.classList.toggle('visible', password.length < 8);
        }

        function validateForm() {
            var password = document.getElementById('password').value;
            if (password.length < 8) {
                return false;
            }
            return true;
        }
 </script>

</body>

</html>

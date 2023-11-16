<?php
include "auth/connection.php";
$conn = connect();

session_start();
$_SESSION['user'] = '';
$_SESSION['userid'] = '';

$m = '';

if (isset($_POST['submit'])) {
    $u_name = $_POST['u_name'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM user_info WHERE u_name = '$u_name' AND password = '$pass'";
    $res = $conn->query($sql);

    if (mysqli_num_rows($res) == 1) {
        $user = mysqli_fetch_assoc($res);
        $_SESSION['user'] = $user['name'];
        $_SESSION['userid'] = $user['id'];

        header('Location:dashboard/dashboard.php');
    } else {
        $m = "Incerect login username / password";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now</title>

    <!-- google icon  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Css Link -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form method="POST" action="">

        <!-- card container -->
        <div class="cardContainer">
            <div class="cardBody">
                <h1>Log In </h1>

                <p class="error__mass"><?php
                                        if ($m != '') echo $m
                                        ?></p>

                <!-- input fild -->
                <div id="emailInputContainer" class="inputContainer">
                    <input class="inputFild" type="text" name="u_name" id="u_name" placeholder="Enter Username">

                    <span class="material-symbols-outlined inputIcon">
                        person
                    </span>
                </div>


                <!-- input fild -->
                <div class="inputContainer">
                    <input class="inputFild" type="password" name="pass" id="pass" placeholder="Enter Password">

                    <span id="visibility" class="material-symbols-outlined">
                        visibility
                    </span>
                </div>


                <div class="submitButtonConatiner">
                    <input class="submit" type="submit" name="submit" value="Login Now">
                </div>


                <p class="signupLink">Did'n have account <a href="signup.php">Signup now</a></p>



            </div>
        </div>

    </form>


    <script>
        document.getElementById("visibility").addEventListener("click", () => {
            const password = document.getElementById("pass");

            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        });
    </script>

</body>

</html>
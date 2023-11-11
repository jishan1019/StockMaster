<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now</title>

    <!-- google icon  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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

                <!-- input fild -->
                <div id="emailInputContainer" class="inputContainer">
                    <input class="inputFild" type="email" name="email" id="email" placeholder="Enter Email">

                    <span class="material-symbols-outlined inputIcon">
                        person
                    </span>
                </div>


                <!-- input fild -->
                <div class="inputContainer">
                    <input class="inputFild" type="password" name="password" id="password" placeholder="Enter Password">

                    <span id="visibility" class="material-symbols-outlined">
                        visibility
                    </span>
                </div>


                <div class="submitButtonConatiner">
                    <input class="submit" type="submit" value="Login Now">
                </div>


                <p class="signupLink">Did'n have account <a href="signup.php">Signup now</a></p>



            </div>
        </div>

    </form>


    <script>
    document.getElementById("visibility").addEventListener("click", () => {
        const password = document.getElementById("password");

        if (password.type === "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    });
    </script>

</body>

</html>
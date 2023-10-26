<?php
include 'auth/connection.php';
$conn = connect();
$massage = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $u_name = $_POST['u_name'];
    $email = $_POST['email'] ? $_POST['email'] : "";
    $pass = $_POST['pass'];
    $r_pass = $_POST['r_pass'];

    if ($pass === $r_pass) {
        $sql = "INSERT INTO user_info('name','u_name', 'email', 'pass')" .
            "VALUES ('$name','$u_name','$email','$pass')";

        if ($conn->query($sql === true)) {
            header('Location: login.php');
        } else {
            $massage = "Somthing went worng Data not insert";
        }
    } else {
        $massage = "Password Does Not Match";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Css Link -->
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>



    <form method="POST" action="signup.php" enctype="multipart/form-data">
        <div class="container">
            <h1>Registration From</h1>

            <hr>

            <div>
                <label for="">Your Name <span>*</span></label>
                <input type="text" name="name" id="name" placeholder="Enter You Name" require>
            </div>

            <div>
                <label for="">User Name<span>*</span></label>
                <input type="text" name="u_name" id="u_name" placeholder="Enter You UserName" require>
            </div>

            <div>
                <label for="">Your Email<span>*</span></label>
                <input type="text" name="email" id="email" placeholder="Enter You Email" require>
            </div>

            <div>
                <label for="">Your Password<span>*</span></label>
                <input type="text" name="pass" id="pass" placeholder="Enter You Password" require>
            </div>


            <div>
                <label for="">Confirm Password<span>*</span></label>
                <input type="text" name="r_pass" id="r_pass" placeholder="Enter You Confirm Password" require>
            </div>

            <div class="text-center">
                <p><span>***</span>By createing an account you agree out Terms & Privacy</p>
            </div>

            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-sucess btn_submit" value="Submit">
            </div>

            <div class="pt-3 text-center login_button">
                <p>Alrady have account <a href="login.php">Login Now</a></p>
            </div>

        </div>

    </form>

</body>

</html>
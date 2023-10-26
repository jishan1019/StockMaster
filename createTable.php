<?php

include 'auth/connection.php';
$conn = connect();


if (mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE 'user_info'")) == 1) {
    echo "Alrady Exists Go Back";
    exit;
}

$sql_user_info_table = "
    CREATE TABLE `user_info` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `name` VARCHAR(100) NOT NULL ,
        `u_name` VARCHAR(100) NOT NULL ,
        `email` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
        `password` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
         PRIMARY KEY (`id`)
         )";

if ($conn->query($sql_user_info_table) === TRUE) {
    echo "User Info Table Create Successfully";
} else {
    die("Error: " . $conn->error . "<br>");
}

<?php 

/*
 * Create Database
*/

    $connect = mysqli_connect("localhost", "root", "");


    if (!$connect) echo "Something wrong is happend" . mysqli_connect_error($connect);


    $sql = "CREATE DATABASE IF NOT EXISTS todoapp";

    mysqli_query($connect,$sql);

    mysqli_close($connect);

/*
 * Create Table structure
*/

    $connect = mysqli_connect("localhost", "root", "","todoapp");


    if (!$connect) echo "Something wrong is happend" . mysqli_connect_error($connect);


    $sql = "CREATE TABLE task (
        id INT PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL
        

    )";

    $result = mysqli_query($connect,$sql);
    mysqli_close($connect);

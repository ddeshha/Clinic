<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "todoapp");
if (!$connect) echo "Something wrong is happend" . mysqli_connect_error($connect);


if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["title"]){

    $title = trim(htmlspecialchars(htmlentities($_POST["title"])));

    $sql = "INSERT INTO `task` (`title`) 
            VALUES('$title')";

    $result = mysqli_query($connect,$sql);
    if(mysqli_affected_rows($connect) == 1){
         $_SERVER["success"] = "data already exists";
    }
};

header("Location: ../index.php");
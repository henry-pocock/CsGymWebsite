<?php

$username = $_POST["username"];
$password = $_POST["password"];

if ($username=="admin" && $password=="Jericho"){
    echo "Correct Login, Re-directing Now";
    header("Location: /members.php");
} else {
    echo "Incorrect Login Info, re-directing to homescreen now...";
    header("Location: /index.html");
}


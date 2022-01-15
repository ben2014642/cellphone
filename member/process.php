<?php
session_start();
require_once("../admin/Helper/db.php");
if (isset($_POST['register'])) {
    if (isset($_POST['email'])) {
        $email = cleanInput($_POST['email']);
    }
    if (isset($_POST['password'])) {
        $password = cleanInput($_POST['password']);
    }
    if (isset($_POST['phone'])) {
        $phone = cleanInput($_POST['phone']);
    }
    if (isset($_POST['fullname'])) {
        $fullname = cleanInput($_POST['fullname']);
    }

    $sql = "INSERT INTO account (email,password,fullname,phone) VALUES ('$email','$password','$fullname',$phone)";
    echo $sql;
    mysqli_query($conn,$sql);
    header("Location: signin.php");
}

if (isset($_POST['login'])) {
    $email = cleanInput($_POST['email']);
    $password = cleanInput($_POST['password']);
    $sql = "SELECT * FROM account WHERE `email` = '$email' AND `password` = '$password'";

    $row = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($row);
    $check = mysqli_num_rows($row);
    
    if ($check > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['fullname'] = $data['fullname'];
    }

    header("Location: ../");
}

function cleanInput($st)
{

    $data = trim($st);
    $data = stripslashes($st);
    $data = htmlspecialchars($st);
    return $data;
    
}


?>
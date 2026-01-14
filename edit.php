<?php

require_once "Database.php";
session_start();
$id = $_SESSION['id'];
$db = new Database();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['first_name']) && trim($_POST['first_name']) != ""){
        if(strpbrk($_POST['first_name'], '!@#$%^&*()-_=+[{]};:\'",<.>/?\\|') === FALSE){
            $db->query("UPDATE users SET first_name='" . $_POST['first_name'] . "' WHERE id='$id'");
        }
    }
    if(isset($_POST['last_name']) && trim($_POST['last_name']) != ""){
        if(strpbrk($_POST['first_name'], '!@#$%^&*()-_=+[{]};:\'",<.>/?\\|') === FALSE){
            $db->query("UPDATE users SET last_name='" . $_POST['last_name'] . "' WHERE id='$id'");
        }
    }
    if(isset($_POST['phone']) && trim($_POST['phone']) != "" && strlen($_POST['phone']) == 8){
        $db->query("UPDATE users SET phone='" . $_POST['phone'] . "' WHERE id='$id'");
    }
    if(isset($_POST['person_code']) && trim($_POST['person_code']) != "" && strlen($_POST['person_code']) == 12){
        $db->query("UPDATE users SET person_code='" . $_POST['person_code'] . "' WHERE id='$id'");
    }
    session_destroy();
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="first_name" placeholder="First name:">
        <input type="text" name="last_name" placeholder="Last name:">
        <input type="text" name="phone" placeholder="Phone:">
        <input type="text" name="person_code" placeholder="Person code:">
        <button>SAVE</button>
    </form>
</body>
</html>
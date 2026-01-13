<?php
    require_once "Database.php";
    session_start();

    $db = new Database();
    $users = $db->query("SELECT first_name, last_name, id FROM users")->fetchAll();
    
    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone']) && isset($_POST['code'])){
        $name = $_POST['first_name'];
        $taken = $db->query("SELECT first_name, person_code, phone FROM users WHERE first_name='$name'")->fetchAll();
        if(!isset($taken[0]['first_name'])){
            $db->query("INSERT INTO users 
                        (first_name, last_name, phone, person_code) 
                        VALUES 
                        ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', '" . $_POST['phone'] . "', '" . $_POST['code'] . "')
                      ");
            header("Location: " . $_SERVER['PHP_SELF']);
        }
    }

    if(isset($_POST['users'])){
        $_SESSION['id'] = $_POST['users'];
        header("Location: edit.php");
        exit;
    }

    if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        $db->query("DELETE FROM users WHERE id='$id'");
        header("Location: " . $_SERVER['PHP_SELF']);
    }
    
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="parent" id="parent" >
        <div class="div1">
            <div  class="box" id="box">
                <img src="vtdt.jpg" alt="VTDT logo" class="img" id="img">
            </div>
        </div>
        <div class="div2">
            <div class="confetti" id="red"></div>
            <div class="confetti" id="green"></div>
            <div class="confetti" id="blue"></div>
            <div class="confetti" id="yellow"></div>
            <div class="confetti" id="pink"></div>
            <div class="confetti" id="cyan"></div>
        </div>
        <div class="div3">
            <button onclick="spin()" class="spin">Click for surprise</button>
        </div>
        <div class="div4">
            <div class="ball"></div>
        </div>
        <div class="div5">
            <a href="https://www.vtdt.lv/" target="_blank">VTDT</a>
            <br>
            <a href="https://www.e-klase.lv/" target="_blank">E-klase</a>
            <br>
            <a href="https://mail.google.com/mail/" target="_blank">Gmail</a>
            <br>
            <a href="https://www.youtube.com/" target="_blank">Youtube</a>
            <br>
            <a href="https://www.1a.lv/" target="_blank">1a.lv</a>
        </div>
        <div class="div6"></div>
        <div class="div7">
            <form method="post">
                <input name="first_name"/>
                <input name="last_name"/>
                <input name="phone"/>
                <input name="code"/>
                <button>ENTER</button>
            </form>
        </div>
        <div class="div8">
            <form method="post">
                <select name="users">
                    <?php
                        foreach($users as $user){
                            echo "<option value='" . $user['id'] . "'>" . $user['first_name'] . " " .  $user['last_name'] . "</option>";
                        }
                    ?>
                </select>
                <button>EDIT</button>
            </form>
        </div>
        <div class="div9">
            <form method="post">
                <select name="delete">
                        <?php
                            foreach($users as $user){
                                echo "<option value='" . $user['id'] . "'>" . $user['first_name'] . " " .  $user['last_name'] . "</option>";
                            }
                        ?>
                </select>
                <button>DELETE</button>
            </form>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>
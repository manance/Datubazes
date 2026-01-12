<?php
require_once "Database.php";
//database connection with class
//$db = new Database("SELECT * FROM users");
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
            <a href="https://www.vtdt.lv/">VTDT</a>
            <br>
            <a href="https://www.e-klase.lv/">E-klase</a>
            <br>
            <a href="https://mail.google.com/mail/">Gmail</a>
            <br>
            <a href="https://www.youtube.com/">Youtube</a>
            <br>
            <a href="https://www.1a.lv/">1a.lv</a>
        </div>
        <div class="div6"></div>
        <div class="div7"></div>
        <div class="div8"></div>
        <div class="div9"></div>
    </div>
</body>
<script src="script.js"></script>
</html>
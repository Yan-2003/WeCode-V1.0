<?php
session_start();
    if($_SESSION['username'] == NULL){
        header('Location: login.php');
    }
?>

<header class="header--box">
    <div class="header--main">
            <div class="header--content">
                <a class="header--logo" href="">
                    <img width="45" src="assets/img/icon/logo.png" alt="">
                    <p>We<span style="color: #F68A26;">Code</span></p>
                </a>
                <div class="header--info">
                    <a href="info.html"><img width = "25" src="assets/img/icon/info.png" alt=""></a>
                </div>
            </div>
    </div>

    <div class="nav--main">
        <div class="nav--content">
            <button class="nav--btn" onclick="btn1()"><div class="icon--btn1"></button>
            <button class="nav--btn" onclick="btn2()"><div class="icon--btn2 active"></button>
            <button class="nav--btn" onclick="btn3()"><div class="icon--btn3"></button>
        </div>
    </div>
</header>


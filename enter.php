<?php
session_start();
require 'class/accept.class.php';

if(isset($_POST['accept'])){
    $push = new acceptAPI($_SESSION['username']);
    header('Location: home.php');
}
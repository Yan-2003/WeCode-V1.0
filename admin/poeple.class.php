<?php 
require 'class/dice.class.php';
$user = json_decode(file_get_contents("../database/userdata/user.json"), true);
$event = json_decode(file_get_contents("../database/post/event.json"), true);

function removelist($id, $array){
    foreach($array as $user){
        if($user['id'] == $id){
            $user['scored'] = true;
            $newData[] = $user;
        }else{
            $newData[] = $user;
        }
    }
    file_put_contents("../database/userdata/user.json", json_encode($newData, JSON_PRETTY_PRINT));
}


if(isset($_POST['add'])){

    foreach ($user as $users) {
        if($_POST['add'] == $users['id']){
            removelist($_POST['add'], $user);
            $add = new addDiceAPI($users['studentID'], $event['blueDice']);
            header("Location: people.php");
        }
    }
}

if(isset($_POST['half'])){

    foreach ($user as $users) {
        if($_POST['half'] == $users['id']){
            removelist($_POST['half'], $user);
            $add = new addDiceAPI($users['studentID'], $event['blueDice'] / 2);
            header("Location: people.php");
        }
    }
}

if(isset($_POST['remove'])){

    foreach ($user as $users) {
        if($_POST['remove'] == $users['id']){
            removelist($_POST['half'], $user);
            $add = new RemoveDiceAPI($users['studentID'], $event['RedDice']);
            header("Location: people.php");
        }
    }
}




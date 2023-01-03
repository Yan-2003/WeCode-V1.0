<?php
require 'class/db.class.php';
$rank = array(100,200,400,500);
$badge = array("coder","programmer","developer","engineer");


$db = new db();
$sql = "SELECT * FROM user ORDER BY level DESC, dice DESC, name";
$num = 1;
$request = mysqli_query($db->conn, $sql);
while($user = mysqli_fetch_assoc($request)){
    if($user['dice'] > 0 || $user['level'] > 0){
        echo "
            <div class='user--content'>
                <div class='user--main'>
                    <div class='user--box1'>
                        <h4>".$num."</h4>
                        <img class = 'leaderboard--prof--pic'src='database/img/userProfile/".$user['img']."' alt=''>
                        <p>".$user['name']."</p>
                    </div>
                    <div class='user--box2'>
                        <img width = '20' src='assets/img/icon/blue_dice.png' alt=''>
                        <p>".$user['dice']."|".$rank[$user['level']]."</p>
                        <img width = '15' src='assets/img/icon/".$badge[$user['level']].".png' alt=''>
                    </div>
                </div>
            </div>";
    }
    $num++;
}



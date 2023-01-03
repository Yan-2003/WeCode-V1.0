<?php
$rank2 = array(100,200,400,500);
$badge2 = array("coder","programmer","developer","engineer","done");
$name = "";
$rank = "";
$dice = "";
$idon = "";
$level = "";
$prolifeimg = "";
$db = new db();
$sql = "SELECT * FROM user";
$request = mysqli_query($db->conn, $sql);
while($user = mysqli_fetch_assoc($request)){
    if($user['username'] == $_SESSION['username']){
        $name = $user['name'];
        $rank = $badge[$user['level']];
        $dice = $user['dice'];
        $level = $user['level'];
        $idon = $user['studentID'];
        $prolifeimg = $user['img'];
    }
}


$barProg = ($dice / $rank2[$level]) * 100;

?>

<div class="profile--style">
    <div class="profile--box1">
        <div class="profile--box1--part1">
            <div class="profile--pic">
                <img src="database/img/userProfile/<?php echo $prolifeimg?>" alt="">
            </div>
            <form action="/logout.php" method="post"><button class="signout--btn" type="submit" name="logout">Sign Out</button></form>
        </div>
        <div class="profile--box1--part2">
            <p id="myname"><?php echo $name?></p>
            <p>Username: <?php echo $_SESSION['username']?></p>
            <p>ST ID: <?php echo $idon?></p>
            <p>Rank: <?php echo $rank?></p>
            <a href="edit.php"><img width = "25" src="assets/img/icon/pencil.png" alt=""></a>
        </div>
    </div>
    <div class="profile--box2">
        <div class="profile--card--box">
            <div class="card--content">
                <div class="card--box1">
                    <h5>Dice Collected</h5>
                    <?php
                        echo "<img width = '25' src='assets/img/icon/".$badge2[$level].".png' alt=''>";
                    ?>
                </div>
                <div class="card--box2">
                    <img width = "64" src="assets/img/icon/blue_dice.png" alt="">
                </div>
                <div class="card--box3">
                    <h5><?php echo $badge2[$level+1];?></h5>
                    <div class="prog--bar">
                        <div class="bar">
                            <p><?php echo $dice."/".$rank2[$level];?></p>
                            <div  style ="width: <?php echo $barProg?>%"class="fill"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



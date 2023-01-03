<?php
$event = json_decode(file_get_contents("database/post/event.json"), true);
$announce = json_decode(file_get_contents("database/post/announcement.json"), true);
$user = json_decode(file_get_contents("database/userdata/user.json"), true);
$checkAccpet = accept($user);

function accept($user){
    if($user != null){
        foreach($user as $users){
            if($users['username'] == $_SESSION['username']){
                return true;
            }
        }
        return false;
    }
}
 
?>



<?php if($announce['public'] == 1):?>
<div class="announcement--contents">
    <div class="announce--contents--main">
        <p>Announcement:</p>
        <div class="announce--upper">
            <h1 class="title"><?php echo $announce['title']?></h1>
            <p><?php echo $announce['content']?></p>
        </div>
        <div class="announce--lower">
            <img src="/database/img/picture/img.png">
        </div>
    </div>
    
</div>
<?php endif?>

<?php if($event != null):?>
<?php if($event['public'] == 1 && $checkAccpet == false && $event != null):?>
<div class="event--contents">
    <div class="event--contents--main">
        <p>Events:</p>
        <div class="event--upper">
            <h1 class="title"><?php echo $event['title']?></h1>
            <div class="event--upper--contents">

                <div class="event--category">
                    <img width = "45" src="assets/img/icon/<?php echo $event['category']?>.png" alt="">
                    <h3>of <?php echo $event['level']?></h3>
                </div>

                <div class="event--text">
                    <div class="event--date--time">
                        <p>Event Starts at :</p>
                        <p><b><?php echo $event['date']." | ".$event['time']?></b></p>
                    </div>
                    <p><?php echo $event['content']?></p>
                </div>

            </div>
        </div>
        <div class="event--lower">
            <div class="dice--style">
                <img width = "32" src="assets/img/icon/blue_dice.png" alt="">
                <h2><?php echo $event['blueDice']?></h2>
            </div>
            <div class="dice--style">
            <img width = "32" src="assets/img/icon/red_dice.png" alt="">
                <h2><?php echo $event['RedDice']?></h2>
            </div>
        </div>
        <div class="accept--event">
            <form action="/enter.php" method="post">
                <button type="submit" name="accept" class="accept">Accept</button>
            </form>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>

<?php if($event != null):?>
<?php if($checkAccpet == true):?>
<div class="event--contents">
    <div class="event--contents--main">
        <p>Events:</p>
        <div class="event--upper2 pD10">
            <h2 class="title">You accept the challange</h2>
            <img  width = "128" src="assets/img/icon/smile.png" alt="">
            <p>Challange: <b><?php echo $event['title']?></b></p>
            <div class="event--category pD10">
                <img width = "45" src="assets/img/icon/<?php echo $event['category']?>.png" alt="">
                <h3>of <?php echo $event['level']?></h3>
            </div>
            <p class="pD10">Event Starts at: <b><?php echo $event['date']." | ".$event['time']?></b></p>
        </div>
        <div class="event--lower">
            <div class="dice--style">
                <img width = "32" src="assets/img/icon/blue_dice.png" alt="">
                <h2><?php echo $event['blueDice']?></h2>
            </div>
            <div class="dice--style">
            <img width = "32" src="assets/img/icon/red_dice.png" alt="">
                <h2><?php echo $event['RedDice']?></h2>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>

<?php if($event != null):?>
<?php if($event['public'] == 0 && $checkAccpet == false):?>
<div class="event--contents">
    <div class="event--contents--main">
        <p>Events:</p>
        <div class="event--upper">
            <h1 class="title">Challenge Close</h1>
            <h4 class="title"><?php echo $event['title']?></h4>
            <img  class = "pD40" width="128" src="assets/img/icon/sad.png" alt="">
            <div class="event--upper--contents">
                <div class="event--category">
                    <img width = "45" src="assets/img/icon/<?php echo $event['category']?>.png" alt="">
                    <h3>of <?php echo $event['level']?></h3>
                </div>

                <div class="event--text">
                    <div class="event--date--time">
                        <p>Event Starts at :</p>
                        <p><b><?php echo $event['date']." | ".$event['time']?></b></p>
                    </div>
                    <p><?php echo $event['content']?></p>
                </div>

            </div>
        </div>
        <div class="event--lower">
            <div class="dice--style">
                <img width = "32" src="assets/img/icon/blue_dice.png" alt="">
                <h2><?php echo $event['blueDice']?></h2>
            </div>
            <div class="dice--style">
            <img width = "32" src="assets/img/icon/red_dice.png" alt="">
                <h2><?php echo $event['RedDice']?></h2>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>




<?php if($event == null):?>
    <div class="event--contents">
    <div class="event--contents--main">
        <p>Events:</p>
        <div class="event--upper">
           <h3 class="title">No Events Available</h3>
           
        </div>
        <div class="no--event--lower">
            <img class = "pD10 center" width = "128" src="assets/img/icon/cancel-event.png" alt="">
            <h3>please wait for further announcement</h3>
        </div>
        
    </div>
</div>
<?php endif?>
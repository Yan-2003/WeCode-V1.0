
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="icon" href="assets/img/icon/logo.png">
    <title>Home</title>
</head>
<body>
    <?php require 'parts/header.php'?>
    <main>
        <section class="leaderboard active">
            <div class="leaderboard--content">
                <?php require 'parts/leaderboard.php'?>
            </div>
        </section>
        <section class="home">
            <div class="home--content">
            <?php require 'parts/home.php'?>
            </div>
        </section>
        <section class="profile active">
            <div class="profile--content">
                <?php require 'parts/profile.php'?>
            </div>
        </section>
    </main>
    <?php require 'parts/footer.php'?>
</body>
</html>




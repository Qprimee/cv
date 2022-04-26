<?php
session_start();
include 'display.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>home</title>
</head>

<body>
    <header id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="<?php echo 'uploads/' . $array_data['profile_tmp_name']; ?>" alt="profile image">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi, I'm <span><?php echo $array_data['name']; ?></span>
                    <?php echo $array_data['profession']; ?>
                </h1>
                <p style="word-break: break-all;">
                    <?php
                    echo $array_data['bio'];
                    ?>
                </p>
            </div>
        </div>
    </header>

    <div class="controlls">
        <div class="control  control-1 active-btn" data-id="home">
            <a href="home.php?cv_username=<?php echo $_SESSION["username"];?>" class="fas fa-home"></a>
        </div>
        <div class="control control-2 " data-id="about">
            <a href="about.php?cv_username=<?php echo $_SESSION["username"];?>" class="fas fa-user"></a>
        </div>
        <div class="control control-5" data-id="contact">
            <a href="contact.php?cv_username=<?php echo $_SESSION["username"];?>" class="fas fa-envelope-open"></a>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>
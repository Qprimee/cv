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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>about</title>
</head>

<body>
    <section class="about" id="about">
        <div class="main-title">
            <h2 class="sm:text-left">About <span>me</span><span class="bg-text">my stats</span></h2>
        </div>
        <div class="about-container sm:mr-40">
            <div class="left-about">
                <h4>Information About me</h4>
                <p style="word-break: break-all;">
                    <?php
                    echo $array_data['user_information'];
                    ?>
                </p>
                <!-- <button class="hidden p-3 px-6 pt-2 text-white bg-green-600 rounded-full baseline hover:bg-green-500 md:block w-36">copy link</button> -->
            </div>
            <div class="right-about">
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text"><?php echo $array_data['completed_projects'] . '+'; ?></p>
                        <p class="small-text">Projects <br /> Completed</p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text"><?php echo $array_data['experience'] . '+'; ?></p>
                        <p class="small-text">Years of <br /> experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


</body>

</html>
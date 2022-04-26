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
    <title>contact</title>
</head>

<body>
    <section id="contact">
        <div class="contact-container">
            <div class="main-title">
                <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
            </div>
            <div class="contact-content-con">
                <div class="left-contact">
                    <h4>Contact me here</h4>
                    <p class="sm:mr-40">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        In, laborum numquam? Quam excepturi perspiciatis quas quasi.
                    </p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Location :</span>
                            </div>
                            <p>
                                <?php echo $array_data['location']; ?>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                                <span>Email :</span>
                            </div>
                            <p>
                                <span> <?php echo $array_data['email']; ?></span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                                <span>Education :</span>
                            </div>
                            <p>
                                <span> <?php echo $array_data['education']; ?></span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                                <span>Mobile Number :</span>
                            </div>
                            <p>
                                <span> <?php echo $array_data['mobile_number']; ?></span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-globe-africa"></i>
                                <span>Languages :</span>
                            </div>
                            <p>
                                <span> <?php echo $array_data['languages']; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

    <div class="controlls">
        <div class="control  control-1 active-btn" data-id="home">
            <a href="home.php?cv_username=<?php echo $_SESSION["username"]; ?>" class="fas fa-home"></a>
        </div>
        <div class="control control-2 " data-id="about">
            <a href="about.php?cv_username=<?php echo $_SESSION["username"]; ?>" class="fas fa-user"></a>
        </div>
        <div class="control control-5" data-id="contact">
            <a href="contact.php?cv_username=<?php echo $_SESSION["username"]; ?>" class="fas fa-envelope-open"></a>
        </div>
    </div>


</body>

</html>
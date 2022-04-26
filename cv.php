<?php
$get = $_GET['page'];

include 'db.php';

$get_data = "SELECT * FROM info";
$get_data_query = mysqli_query($conn, $get_data);
$array_data = $get_data_query->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="main-content">
    <?php
    switch ($get) {
        case 'home':
            include 'home.php';
            break;


        case 'about':
            include 'about.php';
            break;


        case 'contact':
            include 'contact.php';
            break;

        default:
    ?>
            <section>
                <h1>404 page not found</h1>
                <img src="img/404.png" alt="404 page not found">
            </section>
    <?php
            break;
    }
    ?>

    <div class="controlls">
        <div class="control  control-1 active-btn" data-id="home">
            <a href="?page=home" class="fas fa-home"></a>
        </div>
        <div class="control control-2 " data-id="about">
            <a href="?page=about" class="fas fa-user"></a>
        </div>
        <div class="control control-5" data-id="contact">
            <a href="?page=contact" class="fas fa-envelope-open"></a>
        </div>
    </div>
    
    <script src="app.js"></script>
</body>

</html>
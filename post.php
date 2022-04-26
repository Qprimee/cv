<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>post</title>
</head>

<body>

</body>

</html>

<?php
$get_data = "SELECT * FROM info";
$get_data_query = mysqli_query($conn, $get_data);
$array_data = $get_data_query->fetch_assoc();
$username = array();
while ($row = $get_data_query->fetch_assoc()) {
    // echo $row["username"].'</br>';
    array_push($username, $row["username"]);
}

if ($_POST['submit']) {
    $name = $_POST['first_name'] . "\n" . $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $profession = $_POST['profession'];
    $bio = $_POST['bio'];
    $experience = $_POST['experience'];
    $completed_projects = $_POST['completed_projects'];
    $user_information = $_POST['user_information'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $mobile_number = $_POST['mobile_number'];
    $languages = $_POST['languages'];

    // upload profile image
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'svg');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                if (strlen($name) < 2) {
?>
                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 w-1/2" role="alert">
                        <p class="font-bold">Be warned</p>
                        <p>name shuled not null.</p>
                    </div>
                    <?php
                } else {
                    if (strlen($bio) < 50) {
                    ?>
                        <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">Be Warned</p>
                            <p>biography shulde not letter than 50 chr.</p>
                        </div>
                    <?php
                    } elseif (strlen($bio) > 150) {
                    ?>
                        <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">Be Warned</p>
                            <p>biography shulde not more than 150 chr.</p>
                        </div>
                        <?php
                    } else {
                        if (strlen($user_information) < 100) {
                        ?>
                            <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                <p class="font-bold">Be Warned</p>
                                <p>user information shulde not letter than 100 chr.</p>
                            </div>
                        <?php
                        } elseif (strlen($user_information) > 300) {
                        ?>
                            <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                <p class="font-bold">Be Warned</p>
                                <p>user information shulde not more than 300 chr.</p>
                            </div>
                            <?php
                        } else {
                            if (strlen($profession) < 2) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>profession should not null.</p>
                                </div>
                            <?php
                            } elseif (strlen($location) < 2) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>location should not null.</p>
                                </div>
                            <?php
                            } elseif (strlen($email) < 2) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>email should not null.</p>
                                </div>
                            <?php
                            } elseif (strlen($education) < 2) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>education should not null.</p>
                                </div>
                            <?php
                            } elseif (strlen($mobile_number) < 10) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>mobile number should not letter than 10 chr.</p>
                                </div>
                            <?php
                            } elseif (strlen($languages) < 2) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>languages should not null.</p>
                                </div>
                            <?php
                            } elseif (strlen($experience) < 1) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>experience should not null.</p>
                                </div>
                            <?php
                            } elseif (strlen($completed_projects) < 1) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>completed projects should not null.</p>
                                </div>
                            <?php
                            } elseif (strlen($user_name) < 1) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>user name should not null.</p>
                                </div>
                            <?php
                            } elseif (in_array($user_name, $username)) {
                            ?>
                                <div class="w-1/2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">Be Warned</p>
                                    <p>Username is unacceptable. Please change it and try again</p>
                                </div>
                            <?php
                            } else {
                                $insert = "INSERT INTO `info` (`id`, `username`, `profession`, `bio`, `profile_tmp_name`, `experience`, `completed_projects`, `user_information`, `location`, `email`, `education`, `mobile_number`, `languages`, `name`) VALUES (NULL, '$user_name', '$profession', '$bio', '$fileNameNew', '$experience', '$completed_projects', '$user_information', '$location', '$email', '$education', '$mobile_number', '$languages', '$name');";
                                mysqli_query($conn, $insert) or die($conn->error);
                                mysqli_close($conn);

                                $_SESSION["username"] = $user_name;
                            ?>
                                <div class="w-1/2 bg-green-500 border-t border-b border-teal-500 text-white px-4 py-3" role="alert">
                                    <p class="font-bold">Successfully built</p>
                                    <p class="text-sm">Resume created successfully <a href="home.php?cv_username=<?php echo $user_name; ?>">show</a>.</p>
                                </div>

<?php
                            }
                        }
                    }
                }
            }
        } else {
            echo "Your file is too big!";
        }
    } else {
        echo "There was an error uploading your file!";
    }
} else {
    echo "you can not upload files of this type!";
}

?>


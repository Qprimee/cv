<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>macke cv</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <section id="add">
        <form action="post.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">First and last name</span>
                </div>
                <input type="text" class="form-control text-black" name="first_name">
                <input type="text" class="form-control text-black" name="last_name">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">User Name</span>
                </div>
                <input type="text" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="user_name">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Profession</span>
                </div>
                <input type="text" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="profession">
            </div>
            <br>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Biography</span>
                </div>
                <textarea class="form-control text-black" aria-label="With textarea" name="bio"></textarea>
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload profile image</span>
                </div>
                <input type="file" name="file">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Years of experience</span>
                </div>
                <input type="number" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="experience">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Completed projects</span>
                </div>
                <input type="number" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="completed_projects">
            </div>
            <br>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Information about you</span>
                </div>
                <textarea class="form-control text-black" aria-label="With textarea" name="user_information"></textarea>
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                </div>
                <input type="text" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="location">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                </div>
                <input type="email" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">education</span>
                </div>
                <input type="text" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="education">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mobile Number</span>
                </div>
                <input type="text" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="mobile_number">
            </div>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Languages</span>
                </div>
                <input type="text" class="form-control text-black" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="languages">
            </div>
            <br>

            <input type="submit" name="submit" value="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        </form>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/main.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>fanba</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="relative container mx-auto p-6">
        <!-- Flex container -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="pt-2">
                <img src="img/logo.svg" alt="" />
            </div>
            <!-- Menu Items -->
            <div class="hidden space-x-6 md:flex">
                <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
                <a href="add.php" class="hover:text-darkGrayishBlue">Make cv</a>
                <a href="blog.php" class="hover:text-darkGrayishBlue">blog</a>
            </div>
            <!-- Button -->
            <a href="#" class="hidden p-3 px-6 pt-2 text-white bg-green-600 rounded-full baseline hover:bg-green-500 md:block">Get Started</a>

            <!-- Hamburger Icon -->
            <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden">
            <div id="menu" class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="login.php">Login</a>
                <a href="add.php">Make cv</a>
                <a href="blog.php">Blog</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <!-- Flex Container -->
        <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
            <!-- Left item -->
            <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                    Build a resume in the best way
                </h1>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                Creating the right resume is very easy and fast with Fango.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="#" class="p-3 px-6 pt-2 text-white bg-green-600 rounded-full baseline hover:bg-green-500">Get Started</a>
                </div>
            </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="img/illustration-intro.svg" alt="" />
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <!-- Flex container -->
        <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
            <!-- What's Different -->
            <div class="flex flex-col space-y-12 md:w-1/2">
                <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
                    What's different about fanbo?
                </h2>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque.
                </p>
            </div>

            <!-- Numbered List -->
            <div class="flex flex-col space-y-8 md:w-1/2">
                <!-- List Item 1 -->
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- Heading -->
                    <div class="rounded-l-full bg-green-600 md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-green-600">
                                01
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Complete and appropriate resume
                            </h3>
                        </div>
                    </div>

                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                        Complete and appropriate resume
                        </h3>
                        <p class="text-darkGrayishBlue">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </p>
                    </div>
                </div>

                <!-- List Item 2 -->
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- Heading -->
                    <div class="rounded-l-full bg-green-600 md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-green-600">
                                02
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Easy to build resume
                            </h3>
                        </div>
                    </div>

                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                        Easy to build resume
                        </h3>
                        <p class="text-darkGrayishBlue">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </p>
                    </div>
                </div>

                <!-- List Item 3 -->
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- Heading -->
                    <div class="rounded-l-full bg-green-600 md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-green-600">
                                03
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Fast and convenient
                            </h3>
                        </div>
                    </div>

                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                        Fast and convenient
                        </h3>
                        <p class="text-darkGrayishBlue">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
        <!-- Container to heading and testm blocks -->
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <!-- Heading -->
            <h2 class="text-4xl font-bold text-center">
                What's Different About fanbo?
            </h2>
            <!-- Testimonials Container -->
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                <!-- Testimonial 1 -->
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
                    <img src="img/avatar-anisha.png" class="w-16 -mt-14" alt="" />
                    <h5 class="text-lg font-bold">Anisha Li</h5>
                    <p class="text-sm text-darkGrayishBlue">
                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3">
                    <img src="img/avatar-ali.png" class="w-16 -mt-14" alt="" />
                    <h5 class="text-lg font-bold">Ali Bravo</h5>
                    <p class="text-sm text-darkGrayishBlue">
                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3">
                    <img src="img/avatar-richard.png" class="w-16 -mt-14" alt="" />
                    <h5 class="text-lg font-bold">Richard Watts</h5>
                    <p class="text-sm text-darkGrayishBlue">
                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”
                    </p>
                </div>
            </div>
            <!-- Button -->
            <div class="my-16">
                <a href="#" class="p-3 px-6 pt-2 text-white bg-green-600 rounded-full baseline hover:bg-green-500">Get Started</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="bg-green-600">
        <!-- Flex Container -->
        <div class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
            <!-- Heading -->
            <h2 class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
            Make your resume today
            </h2>
            <!-- Button -->
            <div>
                <a href="#" class="p-3 px-6 pt-2 text-green-600 bg-white rounded-full shadow-2xl baseline hover:bg-gray-900">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-veryDarkBlue">
        <!-- Flex Container -->
        <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
            <!-- Logo and social links container -->
            <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                <div class="mx-auto my-6 text-center text-white md:hidden">
                    Copyright &copy; 2022, All Rights Reserved
                </div>
                <!-- Logo -->
                <div>
                    <img src="img/logo-white.svg" class="h-8" alt="" />
                </div>
                <!-- Social Links Container -->
                <div class="flex justify-center space-x-4">
                    <!-- Link 1 -->
                    <a href="#">
                        <img src="img/icon-facebook.svg" alt="" class="h-8" />
                    </a>
                    <!-- Link 2 -->
                    <a href="#">
                        <img src="img/icon-youtube.svg" alt="" class="h-8" />
                    </a>
                    <!-- Link 3 -->
                    <a href="#">
                        <img src="img/icon-twitter.svg" alt="" class="h-8" />
                    </a>
                    <!-- Link 4 -->
                    <a href="#">
                        <img src="img/icon-pinterest.svg" alt="" class="h-8" />
                    </a>
                    <!-- Link 5 -->
                    <a href="#">
                        <img src="img/icon-instagram.svg" alt="" class="h-8" />
                    </a>
                </div>
            </div>
            <!-- List Container -->
            <div class="flex justify-around space-x-32">
                <div class="flex flex-col space-y-3 text-white">
                    <a href="index.php" class="hover:text-green-600">Home</a>
                    <a href="about_us.php" class="hover:text-green-600">About</a>
                    <a href="add.php" class="hover:text-green-600">Make cv</a>
                </div>
                <div class="flex flex-col space-y-3 text-white">
                    <a href="#" class="hover:text-green-600">Community</a>
                    <a href="#" class="hover:text-green-600">Privacy Policy</a>
                </div>
            </div>

            <!-- Input Container -->
            <div class="flex flex-col justify-between">
                <div class="hidden text-white md:block">
                    Copyright &copy; 2022, All Rights Reserved
                </div>
            </div>
        </div>
    </footer>

    <script src="app.js"></script>
</body>

</html>
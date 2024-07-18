<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/app.css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div class="v7_22">
        <div class="v4_11">
            <div class="v4_8">
                <div class="v4_5"></div>
                <div class="v4_6"></div>
            </div>
            <div class="v4_9"></div>
            <div class="v4_10"></div>
        </div>
        <div class="v7_21">

            <span class="v7_5">Pasha Buchuliak</span>
            <span class="v7_6">Laravel Developer</span>
            <img src="../images/photo_2024.jpg" alt="Avatar" class="v7_4">
            <button  class="button v7_10" >
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Download CV</span>
                </span>
            </button>
            <div class="v7_20">
                <div class="v7_7">
                    <a href="https://t.me/Yasha_Lava_0">
                        <img class="logo" src="../images/telegram.png">
                    </a>
                </div>
                <div class="v7_8">
                    <a href="https://www.linkedin.com/in/pasha-buchuliak-02255a244/">
                        <img class="logo" src="../images/linkedin-logo.png">
                    </a>
                </div>
                <div class="v7_9">
                    <a href="https://github.com/PaWuK11">
                        <img class="logo" src="../images/github.png">
                    </a>
                </div>
            </div>

            <span class="v7_11">© 2024 All rights reserved.</span>
            <div class="v7_12_1">
                <div class="routs">
                    <a class="v7_12" href="{{ route('home') }}">
                        <img class="icons" src="../images/free-icon-font-home.png">
                    </a>
                    <div class="sessionInfo" id="home">Home</div>
                </div>
                <div class="routs">
                    <a class="v7_13" href="{{ route('about') }}">
                        <img class="icons" src="../images/free-icon-font-user-3917688.png">
                    </a>
                    <div class="sessionInfo" id="about_me">About Me</div>
                </div>
                <div class="routs">
                    <a class="v7_14" href="{{ route('study') }}">
                        <img class="icons" src="../images/free-icon-font-graduation-cap-3914110.png">
                    </a>
                    <div class="sessionInfo" id="study">Study</div>
                </div>
                <div class="routs">
                    <a class="v7_15" href="{{ route('experience') }}">
                        <img class="icons" src="../images/free-icon-font-building-3915161.png">
                    </a>
                    <div class="sessionInfo" id="experience">Experience</div>
                </div>
                <div class="routs">
                    <a class="v7_16" href="{{ route('portfolio') }}">
                        <img class="icons" src="../images/free-icon-font-briefcase-3916670.png">
                    </a>
                    <div class="sessionInfo" id="portfolio">Portfolio</div>
                </div>
                <div class="routs">
                    <a class="v7_17" href="{{ route('contact') }}">
                        <img class="icons" src="../images/free-icon-font-envelope-3916611.png">
                    </a>
                    <div class="sessionInfo" id="contact">Contact</div>
                </div>
                <a class="v7_18" href="#">
                    <img class="icons" src="../images/free-icon-font-angle-left-3916912.png">
                </a>
                <a class="v7_19" href="#">
                    <img class="icons" src="../images/free-icon-font-angle-right-3916907.png">
                </a>

                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
<script src="../js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

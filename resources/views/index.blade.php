<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valorant blog</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('img/logo-icon.png') }}">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:wght@700&family=Karantina:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/resetAllen.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="bar__container"></div>
        <header class="header">
                <div class="header-logo">
                    <a href="https://playvalorant.com/en-us/" target="_blank">
                        <img src="{{ asset('img/logo.svg') }}" alt="" class="header-logo__img">
                        <img src="{{ asset('img/logo-2.svg') }}" alt="" class="header-logo__img header-logo__img--2">
                    </a>
                </div>
                <div class="bar"></div>
                <div class="menu">
                    <nav>
                        <ul class="menu-header" id="menu">
                            <li class="menu-header__item"><a href="#home" class="">HOME</a></li>
                            <li class="menu-header__item"><a href="#patchnotes" class="">PATCH NOTES</a></li>
                            <li class="menu-header__item"><a href="#highlights" class="">HIGHLIGHTS</a></li>
                            <li class="menu-header__item"><a href="#about" class="">ABOUT</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-contact">
                    <span class="header-contact__icon"><i class="fa fa-bars" id="menu_bar"></i></span>
                    <a class="header-contact__btn" href="https://github.com/CarlosAllen93" target="_blank">Contact</a>
                </div>
        </header>
        <main class="main">
            <section class="home" id="home">
                <div class="bar__home"></div>
                <video class="home__video" src="{{ asset('img/video-valorant.mp4') }}" width="1280" height="720" autoplay muted loop></video>
                <img class="home__logo" src="{{ asset('img/valorant-logo.svg') }}" alt="">
                <a href="https://playvalorant.com/en-us/" class="home__btn"> PLAY FREE</a>
                <div class="bar__home bar__home--right"></div>
            </section>
            <section class="patchnotes" id="patchnotes">
                <img class="patchnotes__background" src="{{ asset('img/red-heaven.svg') }}" alt="">
                <img class="patchnotes__img fade_up" src="{{ asset('img/cypher.svg') }}" alt="">
                <div class="patchnotes-update">
                    <h2 class="patchnotes-update__h2">VALORANT Patch Notes 4.03</h2>
                    <h3 class="patchnotes-update__h3">Deathmatch</h3>
                    <p class="patchnotes-update__p">We???ve been collecting player feedback on DM these past few months and are introducing a few changes to address some of the main points of frustration around the spawning system: <br>
                        Removed and in some cases relocated ???dangerous??? spawn locations <br>
                        Improved spawn logic and spawn placement to increase the likelihood that you will be facing each other players in an encounter<br>
                        Spawning logic will now favor respawn locations farther away from where you are defeated<br>
                        Fixed an issue where the Warm-Up Phase was not using spawn logic properly<br>
                        Respawn Time Reduced: 3s >>> 1.5s
                    </p>
                </div>
            </section>

            <section class="highlights" id="highlights">
                    <img class="highlights__pigeons fade_left" src="{{ asset('img/pigeons.svg') }}" alt="">
                    <h2 class="highlights__title">Highlights</h2>
                    <video class="highlights__video" src="{{ asset('img/valorant-friends.mp4') }}" width="426" height="240" autoplay muted loop></video>
                    <img class="highlights__left" src="{{ asset('img/section-highlights-left.svg') }}" alt="">
                    <img class="highlights__right" src="{{ asset('img/section-highlights-right.svg') }}" alt="">
            </section>
        </main>
        <footer class="footer" id="about">
                <h3 class="footer__h3">Created by : @CarlosAllen93</h3>
                <img class="footer__img" src="{{ asset('img/logo-3.svg') }}" alt="" class="">
                <h4 class="footer__h4">My socials network</h4>
                <ul class="footer-socials">
                    <li class="footer-socials__li"><a href="https://github.com/allencarlosdev" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li class="footer-socials__li"><a href="https://stackoverflow.com/users/16209550/carlos-allen" target="_blank"><i
                                class="fa fa-stack-overflow"></i></a></li>
                    <li class="footer-socials__li"><a href="https://www.linkedin.com/in/allencarlosdev/" target="_blank"><i
                                class="fa fa-linkedin"></i></a></li>
                    <li class="footer-socials__li"><a href="https://www.sololearn.com/profile/20725585" target="_blank"><i class="fab fa-stripe-s"></i></a></li>
                </ul>
                <div class="footer-copyright">
                    <h4 class="footer-copyright__h4">This page is a fan art of:</h4>
                    <p class="footer-copyright__p"> &copy; All copyrights - 2021 RIOT GAMES VALORANT
                        belong to Riot games inspired page: </p>
                    <a href="https://playvalorant.com/en-us/ "
                        target="_blank">https://playvalorant.com/en-us/</a>
                </div>
                <div class="esrb">
                    <img class="esrb__img" src="{{ asset('img/esrb.svg') }}" alt="">
                    <div class="esrb-description">
                        <h4 class="esrb-description__h4">Blood</h4>
                        <h4 class="esrb-description__h4">Language</h4>
                        <h4 class="esrb-description__h4">Violence</h4>
                        <h4 class="esrb-description__h4">Users interact</h4>
                        <h4 class="esrb-description__h4">In-Game Purchases</h4>
                    </div>
                </div>
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/8d2cede7ac.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/animation_fade.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valorant blog</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/resetAllen.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
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
                        <ul class="menu-header">
                            <li class="menu-header__item"><a href="#home" class="">Home</a></li>
                            <li class="menu-header__item"><a href="#patch-notes" class="">Patch Notes</a></li>
                            <li class="menu-header__item"><a href="#highlights" class="">Highlights</a></li>
                            <li class="menu-header__item"><a href="#" class="">About</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-contact">
                    <span class="header-contact__icon"><i class="fas fa-bars"></i></span>
                    <a class="header-contact__btn" href="https://github.com/CarlosAllen93" target="_blank">Contact</a>
                </div>
        </header>
        <main class="main">
            <section class="home" id="home">
                <video class="home__video" src="{{ asset('img/video-valorant.mp4') }}" width="1280" height="720" autoplay muted loop></video>
                <img class="home__logo" src="{{ asset('img/valorant-logo.svg') }}" alt="">
                <a href="#" class="home__btn"> PLAY FREE</a>
            </section>
            <section class="patchnotes">
                PATCH NOTES
            </section>

            <section class="highlights">
                HIGHLIGHTS
            </section>
        </main>
        <footer class="footer">
            FOOTER
        </footer>
    </div>
</body>
</html>

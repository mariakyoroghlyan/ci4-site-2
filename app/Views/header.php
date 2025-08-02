<!-- HEADER -->
<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- PRELOADER -->
    <style>
        .loader {
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            z-index: 999999999;
            background-color: white;
            overflow: visible;
        }

        .loader .wrapper-preloader {
            width: 150px;
            height: 150px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            z-index: 99999999;
            background-color: white;
        }
        .o-hidden {
            overflow: hidden;
        }
    </style>
    <script>
        //start preloader function
        window.onload = function () {
            setTimeout(() => {
                document.body.classList.remove('o-hidden')
                document.querySelector(".loader").style.display = "none";
            }, 2000)
        };
        // end preloader function
    </script>
    <!-- END PRELOADER -->

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>STUDIO SHOO</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/main.css?update=1">
    <link rel="stylesheet" type="text/css" href="/css/mobile.css">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>

</head>
<body class="o-hidden">
<!-- HEADER -->
<div class="loader">
    <div class="wrapper-preloader" style="background-image: url('/images/logo.gif')"></div>
</div>
<!-- HEADER -->

<header>
    <div class="center">
        <div class="header__row">
            <div class="header__item">
                <a href="/" class="header__item-logo">
                    <img src="/images/logo/logo.svg" alt="STUDIO SHOO">
                </a>

                <div class="header__item-bar">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="header__item">
                <ul>
                    <li>
                        <a href="/" <?php if ($slug == 'index') echo 'class="active"'?> >Home</a>
                    </li>
                    <li>
                        <a href="/home/projects"  <?php if ($slug == 'projects') echo 'class="active"' ?> >Projects</a>
                    </li>
                    <li>
                        <a href="/home/about"  <?php if ($slug == 'about') echo 'class="active"' ?> >About us</a>
                    </li>
                    <li>
                        <a href="/home/contact"  <?php if ($slug == 'contact') echo 'class="active"' ?> >Contact</a>
                    </li>
                </ul>
            </div>
            <div class="header__item">
                <a class="header__item-contacts btn-version"></a>
            </div>
        </div>
    </div>
</header>
<!-- HEADER -->
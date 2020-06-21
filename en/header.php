<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Paulo Custodio - Design & iOS Development</title>
        <meta name="description" content="Selected works by Paulo Custodio, a professional Designer & iOS Developer based in Lisbon, Portugal">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffffff">
        <meta name="apple-mobile-web-app-title" content="Paulo Custodio">
        <meta name="application-name" content="Paulo Custodio">
        <meta name="theme-color" content="#ffffff">

        <meta property="og:title" content="Paulo Custodio - Design & iOS Development">
        <meta property="og:description" content="Selected works by Paulo Custodio, a professional Designer & iOS Developer based in Lisbon, Portugal">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://paulocustodio.com/en/">
        <meta property="og:image" content="http://paulocustodio.com/og_logo.png">
        <meta property="og:image" content="http://paulocustodio.com/og_logo_alt.png"/>
        <meta property="fb:app_id" content="285946311829041"/>

        <!--Google Fonts-->
        <link rel="stylesheet" href="https://use.typekit.net/yxm5wyz.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--respond.js-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

        <!--materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="all"/>

        <!--fluidbox-->
        <link type="text/css" rel="stylesheet" href="../css/fluidbox.min.css"  media="all"/>

        <!--swiper css-->
        <link rel="stylesheet" type="text/css" href="../css/swiper.min.css?v=5.4.2">

        <!--custom styles-->
        <link type="text/css" rel="stylesheet" href="../css/style.css"  media="all"/>

        <!--jquery-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <!--form-->
        <script src="../js/app.js"></script>

        <!--pace-->
        <script>
            paceOptions = {
                ghostTime: 100
            }
        </script>
        <script src="../js/pace.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <nav>
                <div class="row">
                    <div class="col l3 s2">
                    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i><span>menu</span></a>
                        <a href="/en/" class="brand-logo"></a>
                    </div>
                    <div class="col l9 s10">
                        <ul id="nav-mobile" class="hide-on-med-and-down">
                            <li class="<?php echo ($_SERVER['PHP_SELF'] == "/en/index.php" ? "active" : "");?>"><a class="rel" href="/en/">Work<div class="borderBottom blinker short"></div></a></li>
                            <li class="<?php echo ($_SERVER['PHP_SELF'] == "/en/profile.php" ? "active" : "");?>"><a class="rel" href="profile.php">Profile<div class="borderBottom blinker short"></div></a></li>
                            <li class="<?php echo ($_SERVER['PHP_SELF'] == "/en/contact.php" ? "active" : "");?>"><a class="rel" href="contact.php">Contact<div class="borderBottom blinker short"></div></a></li>
                            <li>
                                <ul class="lang">
                                    <li class="current-lang">en</li>
                                    <li><a href="/pt">pt</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!--Mobile Nav-->
                    <ul class="side-nav" id="mobile">
                        <li class="close-container">
                            <a id="close-me" onclick="$('.button-collapse').sideNav('hide');">
                                <i class="material-icons">close</i>
                            </a>
                        </li>
                        <li class="portrait-container">
                            <span>
                                <span class="portrait"></span>
                            </span>
                        </li>
                        <li class="about-container">
                            <div class="about-name">Paulo Custodio</div>
                            <div class="about-role">Designer & iOS Developer</div>
                        </li>
                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/en/index.php" ? "active" : "");?> nav-btn"><a href="/en/">Work</a></li>
                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/en/profile.php" ? "active" : "");?> nav-btn"><a href="profile.php">Profile</a></li>
                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/en/contact.php" ? "active" : "");?> nav-btn"><a href="contact.php">Contact</a></li>
                        <li>
                            <ul class="about-social">
                                <li><a target="_blank" href="https://www.linkedin.com/in/paulocustodio"><img src="../img/social/linkedin.svg" alt=""></a></li>
                                <li><a target="_blank" href="https://www.behance.net/paulocustodio"><img src="../img/social/behance.svg" alt=""></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/getcustodio"><img src="../img/social/fb.svg" alt=""></a></li>
                                <li><a target="_blank" href="https://twitter.com/paulocustodio"><img src="../img/social/twitter.svg" alt=""></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

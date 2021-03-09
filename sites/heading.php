<!DOCTYPE html>
<html lang="de" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
    <meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/gnmenu.js"></script>
    <script src="https://kit.fontawesome.com/56a7121549.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>



<body>

    <!-- Navbar -->

    <div class="container">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                <nav class="gn-menu-wrapper">
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <li><a href="../sites/themes.php"><i class="fas fa-server icon-navbar"></i>
                                    Themes
                                </a>
                            </li>
                            <li><a href="../sites/documentariesETC.php"><i class="fas fa-book icon-navbar"></i>
                                    Documentaries etc.
                                </a>
                            </li>
                            <li><a href="../sites/problemSolvings.php"><i class="fas fa-exclamation-triangle icon-navbar"></i>
                                    Problem Solvings
                                </a>
                            </li>
                            <li><a href="../sites/securityTips.php"><i class="fas fa-fingerprint icon-navbar"></i>
                                    Security Tips
                                </a>
                            </li>
                            <li><a href="../sites/twitterFeed.php"><i class="fab fa-twitter icon-navbar"></i>
                                    My Twitter-Feed
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </li>
            <li class="title2"><a class="title" href="../index.php">Mike Dätwyler</a></li>
    </div>
    <script>
        new gnMenu(document.getElementById('gn-menu'));
    </script>
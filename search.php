<!DOCTYPE html>
<head>
    <title>STACK</title>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href="css/nav.css">
    <link rel='stylesheet' href="css/index.css">
    <link rel='stylesheet' href="css/szot.css">
    <link rel='stylesheet' href="css/search.css">
    <link rel='stylesheet' href="css/log.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/log.js"></script>
    <script src="load_data_ajax.js"></script>
</head>
<body class="vertical-container">
<?php
        require("registration.php");
    ?>
    <!-- <div id="log_in" class="log_bg log_display_a">
        <form method="POST" action="" class="vertical-container box">
            <img src="css/logo_f.png">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Hasło">
            <input type="submit" value="Zaloguj się">
        </form>
    </div>
    <div id="sign_in" class="log_bg log_display_a">
        <form method="POST" action="" class="vertical-container box">
            <img src="css/logo_f.png">
                <input type="hidden" name="reg" value="reg">
                <input type="text" name="login" placeholder="Podaj swój login">
                <input type="password" name="password" placeholder="Hasło">
                <input type="password" placeholder="Powtórz hasło">
                <input type="submit" value="Utwórz konto">
        </form>
    </div> -->
    <?php

        require("like.php");
    ?>
    <nav id="nav-hook" class="nav fixed-top container-fluid">
        <div class="horizontal-container width">
            <img src="css/logo.png">
            <div id="menu-hook" class="horizontal-container nav-container__right-side">
                <a href="index.php" class="pointer">Najnowsze</a>
                <a href="search.php" class="pointer nav-active">Szukaj</a>
                <a href="add.php" class="pointer">Wstaw </a>
                <?php
                    if(isset($_SESSION['username']))
                    { 
                        echo '<span class="logged_user">#'.$_SESSION['username'].'</span>';
                    }else
                    {
                        echo '<span id="toggle_log" class="nav-button nav-button__first-button pointer">Zaloguj się</span>';
                    }
                 ?>
                <span class="nav-sep"></span>
                <?php
                    if(isset($_SESSION['username']))
                    { 
                        echo '<form action="" method="POST">';
                        echo '<input type="submit" name="logout" class="nav-button pointer" value="Wyloguj się">';
                        echo '</form>';
                    }else
                    {
                        echo '<span id="toggle_sign" class="nav-button pointer">Zarejestruj się</span>';
                    }
                 ?>
                 
            </div>
        </div>
        <button id="close-menu" type="button" class="btn-close" aria-label="Close"></button>
    </nav>
    <div class="szot_container width horizontal-container margin">
        <div class="search_container">
            <span>
                <div class="search-box__header">
                    Wybierz kategorie
                </div>
                <label class="search-box__row">
                    <input id="chceck-smieszne" type="checkbox" class="checkbox">
                    <div class="search-box__checkbox">
                    </div> 
                    <div class="search-box__text">
                        Zabawne
                    </div>
                </label>
                <label class="search-box__row">
                    <input id="chceck-krajobraz" type="checkbox" class="checkbox">
                    <div class="search-box__checkbox">
                    </div> 
                    <div class="search-box__text">
                        Krajobraz
                    </div>
                </label>
                <label class="search-box__row">
                    <input id="chceck-sztuka" type="checkbox" class="checkbox">
                    <div class="search-box__checkbox">
                    </div> 
                    <div class="search-box__text">
                        Sztuka
                    </div>
                </label>
                <button id="category_search" class="author_submit">Szukaj</button>
                <div class="search-box__header">
                    Szukaj autora
                </div>
                <input id="author_name" type="text" class="author_input"/>
                <button id="author_search" class="author_submit">Szukaj</button>
            </span>
        </div>
        <div class="szot_container szot_container--width">
            <div class="header width horizontal-container">
                <span>Wyszukane szoty</span>
                <span class="header__line">
                    <span class="header__line--blue"></span>
                </span>
            </div>
            <div id="szot_hook" class="szot_container szot_container--width">
                
            </div>
        </div>
    </div>
    <div class="horizontal-container footer">
        <img src="css/logo_f.png">
    </div>
</body>
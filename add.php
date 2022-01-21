<!DOCTYPE html>
<head>
    <title>STACK</title>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href="css/nav.css">
    <link rel='stylesheet' href="css/add.css">
    <link rel='stylesheet' href="css/szot.css">
    <link rel='stylesheet' href="css/log.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/log.js"></script>
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

    <nav class="navbar nav navbar-expand-md fixed-top container-fluid navbar-dark">
            <img src="css/logo.png">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="collapsibleNavbar" class="justify-content-end collapse navbar-collapse">
                <div class="navbar-nav horizontal-container nav-container__right-side">
                    <a href="index.php" class="pointer">Najnowsze</a>
                    <a href="search.php" class="pointer">Szukaj</a>
                    <a href="add.php" class="pointer nav-active">Wstaw </a>
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

    </nav>
    <div class="container-lg">
        <div class="header row align-items-center">
            <span class="col-sm-3">Dodaj szota</span>
            <div class="col-sm-9">
                <div class="header__line"></div>
            </div>
        </div>
    </div>
    <form id="upload_form" class="width row" action="upload.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="col-sm-3 col">
                <span>Tytuł</span>
                <input id="tytul" type="text" name="title" />
                <span>Opis</span>
                <textarea name="description"></textarea>
        </div>
        <div class="col-sm-3 col">
                Czas do wygaśnięcia
                <select name="expire">
                    <option value="30">30 minut</option>
                    <option value="45">45 minut</option>
                    <option value="60">godzina</option>
                </select>
                <div id="file_hook" class="fileUpload">
                    <input name="image" id="image" type="file" class="upload" />
                    <span>Plik</span>
                </div>
                <input type="submit" name="submit" value="Dodaj szota" class="submit">
        </div>
        <div class="col-sm-3 col">
                Wybierz kategorie
                <label class="search-box__row">
                    <input name="category[]" id="chceck-smieszne" value="Zabawne" type="checkbox" class="checkbox">
                    <div class="search-box__checkbox">
                    </div> 
                    <div class="search-box__text">
                        Zabawne
                    </div>
                </label>
                <label class="search-box__row">
                    <input name="category[]" id="chceck-Krajobraz" value="Krajobraz" type="checkbox" class="checkbox">
                    <div class="search-box__checkbox">
                    </div> 
                    <div class="search-box__text">
                        Krajobraz
                    </div>
                </label>
                <label class="search-box__row">
                    <input name="category[]" id="chceck-sztuka" type="checkbox" value="Sztuka" class="checkbox">
                    <div class="search-box__checkbox">
                    </div> 
                    <div class="search-box__text">
                        Sztuka
                    </div>
                </label>
        </div>
    </form>
    <div class="horizontal-container footer">
        <img src="css/logo_f.png">
    </div>
</body>
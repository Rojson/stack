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
</head>
<body class="vertical-container">
    <div id="log_in" class="log_bg log_display_a">
        <form class="vertical-container box">
            <img src="css/logo_f.png">
            <input type="text" placeholder="Login">
            <input type="password" placeholder="Hasło">
            <input type="submit" value="Zaloguj się">
        </form>
    </div>
    <div id="sign_in" class="log_bg log_display_a">
        <form class="vertical-container box">
            <img src="css/logo_f.png">
                <input type="text" placeholder="Podaj swój login">
                <input type="password" placeholder="Hasło">
                <input type="password" placeholder="Powtórz hasło">
                <input type="submit" value="Utwórz konto">
        </form>
    </div>
    <?php
        require("registration.php");
    ?>
    <nav class="nav fixed-top container-fluid">
        <div class="horizontal-container width">
            <img src="css/logo.png">
            <div class="horizontal-container nav-container__right-side">
            <a href="index.php" class="pointer nav-active">Najnowsze</a>
                <a href="search.php" class="pointer">Szukaj</a>
                <a href="add.php" class="pointer">Wstaw <?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];} ?></a>
                <span id="toggle_log" class="nav-button nav-button__first-button pointer">Zaloguj się</span>
                <span class="nav-sep"></span>
                <span id="toggle_sign" class="nav-button pointer">Zarejestruj się</span>
            </div>
        </div>
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
                        Śmieszne
                    </div>
                </label>
                <label class="search-box__row">
                    <input id="chceck-Krajobraz" type="checkbox" class="checkbox">
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

                <div class="search-box__header">
                    Szukaj autora
                </div>
                <input type="text" class="author_input"/>
                <button class="author_submit">Szukaj</button>
            </span>
        </div>
        <div class="szot_container szot_container--width">
            <div class="header width horizontal-container">
                <span>Wyszukane szoty</span>
                <span class="header__line">
                    <span class="header__line--blue"></span>
                </span>
            </div>
            <div class="szot">
                <div class="szot__nick szot--text">
                    #noszekalosze
                </div>
                <div class="szot__tags horizontal-container">
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                </div>
                <img src="css/test.png">
                <div class="szot__title">
                    Bawołek w wodzie
                </div>
                <div class="szot__desc">
                    Leży se i ma wyjebane 
                </div>
                <div class="szot__like_plus horizontal-container">
                    <div class="plus_btn"></div>22
                </div>
                <div class="szot__time">
                    Wygaśnie za: 21 minut
                </div>
            </div>
            <div class="szot">
                <div class="szot__nick szot--text">
                    #noszekalosze
                </div>
                <div class="szot__tags horizontal-container">
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                </div>
                <img src="css/test.png">
                <div class="szot__title">
                    Bawołek w wodzie
                </div>
                <div class="szot__desc">
                    Leży se i ma wyjebane 
                </div>
                <div class="szot__like_plus horizontal-container">
                    <div class="plus_btn"></div>22
                </div>
                <div class="szot__time">
                    Wygaśnie za: 21 minut
                </div>
            </div>
            <div class="szot">
                <div class="szot__nick szot--text">
                    #noszekalosze
                </div>
                <div class="szot__tags horizontal-container">
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                    <div class="szot__tag szot--text">
                        #natura
                    </div>
                    <div class="szot__tag szot--text">
                        #afryka
                    </div>
                </div>
                <img src="css/test.png">
                <div class="szot__title">
                    Bawołek w wodzie
                </div>
                <div class="szot__desc">
                    Leży se i ma wyjebane 
                </div>
                <div class="szot__like_plus horizontal-container">
                    <div class="plus_btn"></div>22
                </div>
                <div class="szot__time">
                    Wygaśnie za: 21 minut
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal-container footer">
        <img src="css/logo_f.png">
    </div>
</body>
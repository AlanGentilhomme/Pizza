<?php

    session_start();

    if(!isset($_SESSION["nbrArticlesPanier"])) {
        $_SESSION["nbrArticlesPanier"] = 0;
    } else {
        $_SESSION["nbrArticlesPanier"]++;
    }

    if (isset($_GET['pizzaReine']) && ($_GET['pizzaReine'] == 1)) {
        $_SESSION['pizzaReine']++;
    }

    if (isset($_GET['pizzaMarjolaine']) && ($_GET['pizzaMarjolaine'] == 1)) {
        $_SESSION['pizzaMarjolaine']++;
    }

    if (isset($_GET['pizzaYann']) && ($_GET['pizzaYann'] == 1)) {
        $_SESSION['pizzaYann']++;
    }

    if (isset($_GET['pizzaAlan']) && ($_GET['pizzaAlan'] == 1)) {
        $_SESSION['pizzaAlan']++;
    }

    if (isset($_GET['pizzaAudrey']) && ($_GET['pizzaAudrey'] == 1)) {
        $_SESSION['pizzaAudrey']++;
    }

    if (isset($_GET['pizzaCefii']) && ($_GET['pizzaCefii'] == 1)) {
        $_SESSION['pizzaCefii']++;
    }

    // echo $_GET["vider"];
    // if($_GET["vider"] > 0) {
    //     $_SESSION["nbArticlesPanier"] = 0;
    // }

    if (isset($_GET["vider"]) && ($_GET["vider"] == 1)) {
        $_SESSION["nbrArticlesPanier"] = 0;

        $_SESSION["pizzaReine"] = 0;
        $_SESSION["pizzaMarjolaine"] = 0;
        $_SESSION["pizzaYann"] = 0;
        $_SESSION["pizzaAlan"] = 0;
        $_SESSION["pizzaAudrey"] = 0;
        $_SESSION["pizzaCefii"] = 0;

    }


     header("Location: index.php?page=carte");
    
    //var_dump($_SESSION);

    // var_dump($_GET);

    // if(!isset)

    
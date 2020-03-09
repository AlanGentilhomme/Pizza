<?php
session_start();

$pseudo=$_SESSION["user"];
$dest ='marguerite.yann@gmail.com';
$sujet ='Commande';
$detail="";

if(isset($_SESSION["pizzaReine"]) && $_SESSION["pizzaReine"] > 0) {
    $detail.=  $_SESSION["pizzaReine"] . " Pizza(s) Reine " . "\n\r" ;
}

if(isset($_SESSION["pizzaYann"]) && $_SESSION["pizzaYann"] > 0) {
    $detail.=  $_SESSION["pizzaYann"] . " Pizza(s) Yann   " . "\n\r"  ;
}

if (isset($_SESSION["pizzaMarjolaine"]) && $_SESSION["pizzaMarjolaine"] > 0) {
    $detail.=$_SESSION["pizzaMarjolaine"] . " Pizza(s) Marjolaine " . "\n\r"  ;
}

if (isset($_SESSION["pizzaAlan"]) && $_SESSION["pizzaAlan"] > 0) {
    $detail.=  $_SESSION["pizzaAlan"] . " Pizza(s) Alan " . "\n\r"  ;
}
if (isset($_SESSION["pizzaAudrey"]) && $_SESSION["pizzaAudrey"] > 0) {
    $detail.=  $_SESSION["pizzaAudrey"] . " Pizza(s) Audrey " . "\n\r"  ;
}
if (isset($_SESSION["pizzaCefii"]) && $_SESSION["pizzaCefii"] > 0) {
    $detail.= $_SESSION["pizzaCefii"] . " Pizza(s) Cefii " . "\n\r" ;
}
$message ="Commande de " . $pseudo . " : " . "\r\n" . $detail  ;



if (mail($dest, $sujet, $message)){
    header("Location: index.php?page=valid");
    
        $_SESSION["nbrArticlesPanier"] = 0;

        $_SESSION["pizzaReine"] = 0;
        $_SESSION["pizzaMarjolaine"] = 0;
        $_SESSION["pizzaYann"] = 0;
        $_SESSION["pizzaAlan"] = 0;
        $_SESSION["pizzaAudrey"] = 0;
        $_SESSION["pizzaCefii"] = 0;
    }




<div class="row py-2 d-flex flex-column border border-3">
        <div class="text-center mt-3 mx-auto">
            <h1 id="panier">Panier</h1>
        </div>

        <div class="text-center mx-auto">
        <?php

            if ($_SESSION["nbrArticlesPanier"] > 0) {
                if (isset($_SESSION["pizzaReine"]) && $_SESSION["pizzaReine"] > 0) {
                    echo "<div class='h5 d-flex align-items-center justify-content-between'>" . $_SESSION["pizzaReine"] . " Pizza Reine " . " - ".$_SESSION['pizzaReine'] * 12 . " €<a href='#' class='btn btn-success btn-sm'>+</a><a href='#' class='btn btn-danger btn-sm'>-</a></div>";
                }
                if (isset($_SESSION["pizzaMarjolaine"]) && $_SESSION["pizzaMarjolaine"] > 0) {
                    echo "<div class='h5 d-flex align-items-center'>" . $_SESSION["pizzaMarjolaine"] . " Pizza Marjolaine " . " - ".$_SESSION['pizzaMarjolaine'] * 15 . " €<a href='#' class='btn btn-success btn-sm'>+</a><a href='#' class='btn btn-danger btn-sm'>-</a></div>";
                }
                if (isset($_SESSION["pizzaYann"]) && $_SESSION["pizzaYann"] > 0) {
                    echo "<div class='h5 d-flex align-items-center'>" . $_SESSION["pizzaYann"] . " Pizza Yann " . " - ".$_SESSION['pizzaYann'] * 14 . " €<a href='#' class='btn btn-success btn-sm'>+</a><a href='#' class='btn btn-danger btn-sm'>-</a></div>";
                }
                if (isset($_SESSION["pizzaAlan"]) && $_SESSION["pizzaAlan"] > 0) {
                    echo "<div class='h5 d-flex align-items-center'>" . $_SESSION["pizzaAlan"] . " Pizza Alan " . " - ".$_SESSION['pizzaAlan'] * 13 . " €<a href='#' class='btn btn-success btn-sm'>+</a><a href='#' class='btn btn-danger btn-sm'>-</a></div>";
                }
                if (isset($_SESSION["pizzaAudrey"]) && $_SESSION["pizzaAudrey"] > 0) {
                    echo "<div class='h5 d-flex align-items-center'>" . $_SESSION["pizzaAudrey"] . " Pizza Audrey " . " - ".$_SESSION['pizzaAudrey'] * 14 . " €<a href='#' class='btn btn-success btn-sm'>+</a><a href='#' class='btn btn-danger btn-sm'>-</a></div>";
                }
                if (isset($_SESSION["pizzaCefii"]) && $_SESSION["pizzaCefii"] > 0) {
                    echo "<div class='h5 d-flex align-items-center'>" . $_SESSION["pizzaCefii"] . " Pizza Cefii " . " - ".$_SESSION['pizzaCefii'] * 15 . " €<a href='#' class='btn btn-success btn-sm'>+</a><a href='#' class='btn btn-danger btn-sm'>-</a></div>";
                }
    
                $totalPanier = ($_SESSION["pizzaReine"] * 12) + ($_SESSION["pizzaMarjolaine"] * 15) + ($_SESSION["pizzaYann"] * 14) + ($_SESSION["pizzaAlan"] * 13) + ($_SESSION["pizzaAudrey"] * 14) + ($_SESSION["pizzaCefii"] * 15);
                echo "Total : " . $totalPanier . "€";
            }
            else {
                echo "Votre panier est vide!";
            }
            

            //echo $_SESSION["nbrArticlesPanier"];
            // var_dump($_SESSION["SSD128"]);

            // var_dump($_SESSION["UserData"]["Username"]);
            
            
        ?>
        <div class="col">

        </div>
        <div class="col">
            <div class="row my-1 d-flex justify-content-center">
                <a href="modifierPanier.php?vider=1" class="btn btn-danger">Vider le panier</a>
            </div>
            <div class="row my-1 d-flex justify-content-center">
                <?php if (isset($_GET["session"]) && $_GET["session"] == 1) {
                    echo '<a href="index.php?page=mail" class="btn btn-success">Payer la commande</a>';
                } else {
                    echo '<a href="index.php?page=login" class="btn btn-success">Valider la commande</a>';
                }
                ?>
            </div>
            <!-- <div class="row my-1 d-flex justify-content-center">
                 <?php/*
                    if (isset($_GET['page']) ) {
                        include('mail.php');
                    }*/
                ?>
            </div> -->
        </div>
        <div class="col">
            
        </div>
        

        

        </div>
            

    </div>

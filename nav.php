<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Red Rock Pizza</title>
        <!-- bootstrap css cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        
        <!-- bootstrap js cdn -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/323b51ee81.js"></script>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Forum&display=swap" rel="stylesheet">
        
    </head>
    <body>
        
        <?php
        $name = isset($_SESSION['user']) ? $_SESSION['user'] : "Anonyme";
        ?>

            <!-- NAVBAR -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black75 font-weight-bold">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" height="50" width="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item text-center">
                            <a class="nav-link text-light" href="index.php"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link text-light" href="index.php?page=carte">Commande</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link text-light" href="index.php#presentation">A propos de nous</a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="index.php#map" class="nav-link text-light">Contact</a>
                        </li>
                        <li class="nav-item text-center">

                                <?php 
                            if (isset($_SESSION["user"]) && $_SESSION['user'] !== ""){
                                echo '<a href="verifConnect.php?deco=1" class="nav-link text-light">' . $_SESSION["user"] . '<i class="fas fa-power-off"></i></a>';
                                //var_dump($_SESSION['user']);
                            }
                            else{
                                echo '<a href="index.php?page=login" class="nav-link text-light">'. 'Connexion' . '<i class="fas fa-power-off"></i></a>';
                            }
                            if (isset($_SESSION["user"]) && $_SESSION["user"] === ""){
                               echo '<a href="index.php?page=login" class="nav-link text-light">'. 'Connexion' . '<i class="fas fa-power-off"></i></a>';
                            }?> 
                            
                        </li>
                        <li class="nav-item text-center">
                            <a href="#" class="nav-link text-light"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

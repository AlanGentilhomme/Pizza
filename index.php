<?php

    session_start();

    //  VERIF FORMULAIRE
    $msg="";
    $formulaireOk= true;
    if (isset($_POST["clic"])){ /* CHARGER FORMULAIRE */
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $telephone=$_POST['tel'];
    $mail=$_POST['email'];
    $msgClient = $_POST['message'];
    // CHAMPS VIDES
        if (($nom == "") || ($prenom == "") || ($mail == "") || ($telephone == "") || ($msgClient == "")) {
            $msg=$msg."<br>Tous les champs sont obligatoires";
            $formulaireOk=false;
        }
        
    // TELEPHONE
        if ((!is_numeric($telephone) || (strlen($telephone) != 10)) && ($telephone != "")){
            $msg=$msg."<br>Le numéro de téléphone ne doit comporter que 10 chiffres";
            $formulaireOk=false;
        }
    // EMAIL
        $mailRegex = "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#";
        if (!preg_match($mailRegex, $mail))
        $msg=$msg."<br>Adresse email non valide";
        
    //  ENVOI MESSAGE -------------------------
        $dest = 'marjo@lacan.net';
        $sujet = 'Envoi formulaire';
        $message = 'Voici les infos du formulaire \r\n'. $nom . '\r\n'. $prenom . '\r\n' . $mail . '\r\n' . $telephone . '\r\n' . $msgClient;
        // $envoi= mail($dest, $sujet, $message);  
        
        if($formulaireOk){
            $envoi= mail($dest, $sujet, $message);    
        }
    }


    // NAV
    include("nav.php");

    

    // GET PAGE (href menu)
    if (isset($_GET["page"]) && $_GET["page"] == "carte") {
        include("carte.php");
    }
    else if (isset($_GET["page"]) && $_GET["page"] == "login") {
        include("login.php");
    }
    else if (isset($_GET["page"]) && $_GET["page"] == "login?error=0" || isset($_GET["page"]) && $_GET["page"] == "login?error=1") {
        include("login.php");
    }
    else if(isset($_GET["page"]) && $_GET["page"] == "valid") {
        include("validationCommande.php");
    }
    else {
        // HEADER
        include("header.html");

        // PRESENTATION
        include("presentation.html");

        // FORMULAIRE
        include("formulaire.php");
    }

    // FOOTER
    include("footer.html");


    //var_dump($_GET["page"]);

    

<?php
    session_start();
    $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";
    //var_dump($_POST);
    if (isset($_POST['sub'])) {
        //echo 'step 0<br>';
        if ($pseudo === "zebredu49" && $mdp === "zebre") {
            $_SESSION['user']=$pseudo;
            header('Location: index.php?page=carte#panier');
            //echo 'step 1<br>';
        } else {
            if ($pseudo == "" && $mdp == "") {
                header('Location: index.php?page=login?error=0');
                //echo $champVide;
                //echo 'step 2<br>';
            } else {      
                header('Location: index.php?page=login?error=1');     
                // echo $incorrect;
                //echo 'step 3<br>';
            }
        }
    }
    if (isset($_GET['deco']) && $_GET['deco']==1){
        
        if ($_SESSION['user']=$pseudo){
    
            $_SESSION['user']="";
            setcookie('$pseudo');
            setcookie('$mdp');
            
        }
        if ($_SESSION["user"] == "") {
            header("Location: index.php");
        }
        var_dump($_SESSION["user"]);
    }
   var_dump($_SESSION["user"]);

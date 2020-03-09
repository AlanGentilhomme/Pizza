<?php
    $messageError = "";
    //$error = "";
    
    // if (isset($_GET['error'])) {
    //     $error = ($_GET['error'] === "0") ? "Champs vide !" : "Champs Incorrect";
    //     $messageError = "<div class='alert alert-danger' role='alert'>$error</div>";
    // }

    if (isset($_GET['page'])) {
            // $error = ($_GET['page'] === "login?error=0") ? "Champs vide !" : "Champs Incorrect";
            if ($_GET['page'] === "login?error=0") {
                $error = "Champs vide !";
                $messageError = "<div class='alert alert-danger' role='alert'>$error</div>";
            }
            if ($_GET['page'] === "login?error=1") {
                $error = "Champs Incorrects";
                $messageError = "<div class='alert alert-danger' role='alert'>$error</div>";
            }


            
        }
?>

    <div class="vh rouge m-0 policeblanc text-center align-items-center justify-content-center  d-flex">

        <form action="verifConnect.php" method="POST" class="flex-column d-flex col-sm-10 col-md-4">
            <h3><u>Se connecter : </u></h1>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" class="rounded">

            <label for="mdp" class="mt-3">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp" class="rounded">

            <input type="submit" id="sub" name="sub" class="rounded btn btn-success mt-4 mb-5">

            <?php echo $messageError; ?>
        </form>

    </div>

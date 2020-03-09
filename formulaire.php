    
    <div class="container col-md-8 col-sm-12 text-center" id="map">

<div class="container col-md-6 col-sm-12 mt-5">
    <h3 class="mb-3"><u>Nos coordonnées :</u></h3>
    <h4>Red Rock Pizza<h4>
     <p>2 allée d'Italie</p>
    <p>49400 Angers</p>
</div>

<div class="container col-md-6 mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.180519447176!2d-115.33354397557927!3d51.08667593659238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5370c5a4836c5b2b%3A0x6e4a1b98cabaaf19!2sRed+Rock+Pizza!5e0!3m2!1sfr!2sfr!4v1560858195654!5m2!1sfr!2sfr" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>

<div class="container col-md-12 col-sm-12 mt-5 text-center mx-auto">

<div class="container col-md-10 col-sm-12">
    <h3><u> Nous contacter :</h3>
</div>

<div class="container col-md-12 col-sm-12 mt-2 text-center mx-auto">
    <p style='color: red;'>
        <?php echo $msg ?>
    </p>
</div>

<div class="container-fluid">
    
        <form method="POST" action="index.php#map" enctype="multipart/form-data" class="mx-auto">
            
            <div class="form-row col-md-6 mx-auto">
                <div class="form-group col-md-5 col-sm-12 mx-auto">
                    <label for="nom">Nom : </label> 
                    <input type="text" id="nom"  class="form-control border border-dark  bg-light"  name="nom" 
                    value="<?php if (isset($_POST['nom'])){echo $nom;} ?>"/>
                </div>

                <div class="form-group col-md-5 col-sm-12 mx-auto">
                    <label for="prenom">Prénom : </label> 
                    <input type="text" class="form-control border border-dark bg-light" id="prenom" name="prenom" 
                    value="<?php if (isset($_POST['prenom'])){echo $prenom;} ?>"/>
                </div>
            </div>

            <div class="form-row col-md-6 mx-auto">
                <div class="form-group col-md-5 col-sm-12 mx-auto">
                    <label for="tel">Téléphone : </label>
                    <input type="tel" class="form-control border border-dark bg-light" id="tel" name="tel"
                    value="<?php if (isset($_POST['tel'])){echo $telephone;} ?>"/>
                </div>

                <div class="form-group col-md-5 col-sm-12 mx-auto">
                    <label for="email">e-mail : </label>
                    <input type="email" class="form-control border border-dark bg-light" id="email" name="email"
                    value="<?php if (isset($_POST['tel'])){echo $mail;} ?>"/>
                </div>
            </div>

            <div class="form-group col-md-6 col-sm-12 mx-auto">
                    <label for="message"> Votre message :</label> 
                    <textarea cols="40" rows="10" id="message" class="form-control border border-dark bg-light" name="message"></textarea>            
            </div>

            <button type="submit" class="btn btn-danger mb-3" name="clic">Valider</button>
        </form>
    </div>
<div id="wpac-review"></div>
<script type="text/javascript">
wpac_init = window.wpac_init || [];
wpac_init.push({widget: 'Review', id: 19208});
(function() {
    if ('WIDGETPACK_LOADED' in window) return;
    WIDGETPACK_LOADED = true;
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = 'https://embed.widgetpack.com/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>

</div>
</div>

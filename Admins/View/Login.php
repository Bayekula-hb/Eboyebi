<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Public/jquery/jquery-3.5.1.min.js"></script>
        <script src="Public/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link rel="stylesheet" href="Public/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="Public/fontawesome/js/all.min.css">
        <link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Public/Css/Style.css">
        <title> Login</title>
    </head>
    <body>
        <div class="bg-primary CorpsLogin">    
            <div class="container">
                <div class="row" id="TitleLogin">
                    <div class="col-12">
                        <p class="h1 text-light" id="EnteteLogin">
                            E-Boyebi
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="h3 text-warning" id="EnteteLogin">
                            Connexion
                        </p>
                    </div>
                </div>
                <div class="bg-light row" >
                   <div class="col-12">
                       <p class="h5">
                       </p>
                   </div>
                   <div class="col-12" id="FormulaireLogin">
                      <?php require_once('Public/Annexes/FormulaireConnexion.php');?>
                   </div>
                </div>
            </div>
            <div class="bg-primary text-light container-fluid">
                <div class="row">
                    <div class="col-12" id="FooterLogin">
                        <?php require_once('Public/Squellette/Footer.php');?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
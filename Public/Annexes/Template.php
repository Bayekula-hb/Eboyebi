<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Public/jquery/jquery-3.5.1.min.js"></script>
        <script src="Public/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Public/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="Public/fontawesome/js/all.min.css">
        <link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Public/Css/MonStyle.css">
        <title><?= $title ?></title>
    </head>
    <body >
        <div class="p-lg-3 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <nav class="col navbar navbar-expand-lg navbar-light">
                        <?php require_once('Public/Squellette/Title.php');?>
                        <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarContent" class="col-6 col-lg-12 collapse navbar-collapse">
                            <?= $Menu ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="BodyPage">
            <div class="row">
                <?= $content ?>
            </div>
        </div>
        <div class="p-1 bg-primary" id="Pied" id="BodyPage">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col-12 col-md-4" id="FormNewletters">
                        <p class="h4"> Inscrivez-vous à notre newsletters pour vous tenir au courant de nos activités. </p>
                        <form class="form-inline" id="NewlettersElemets" method="post" action="Model/Newsletters.php">
                            <div class="form-group">
                                <input type="email" name="Mail" class="form-control" id="email" placeholder="MonAdresse@boitemail.com">
                                <button type="submit" name="Newsletters" class="BtnNewsletters btn btn-info">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container" >
                <div class="row">
                    <div class="col">
                        <?php require_once('Public/Squellette/Footer.php');?>
                    </div>
                </div>
            </div>
        </div>
        <script src="Public/Js/Mon_Js.js"></script>
    </body>
</html>
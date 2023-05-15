<!DOCTYPE html>
<html lang="fr">
<head>
    <!--- Inclusion du contenu du fichier header.php --->
<?php  include VIEWS_DIR . '/partials/header.php';?>
    <title>Erreur 404 - Wikifruit</title>
</head>
<body>
    <!-- Inclusion du menu ---->
    <?php  include VIEWS_DIR . '/partials/menu.php';?>


    <!-- Grille Bootstrap avec le contenu principal de la page -->
    <div class="container">

        <!-- Titre h1 -->
        <div class="row my-5">
            <div class="col-12">
                <h1 class=text-center>Erreur 404 : Page introuvable </h1>
            </div>
        </div>

        <!-- Contenu -->
        <div class="row">

            <div class="col-12">

                <p class ="alert alert-warning fw-bold text-center">Désolé cette page n'existe pas !</p>
                <div class="text-center">
                    <img src="<?= PUBLIC_PATH ?>/images/404.png" alt="">
                </div>

            </div>

        </div>

    </div>


    <!--- Inclusion du contenu du fichier header.php --->
    <?php  include VIEWS_DIR . '/partials/footer.php';?>
</body>
</html>

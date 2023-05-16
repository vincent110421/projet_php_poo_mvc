<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Inclusion du contenu du fichier header.php -->
<?php  include VIEWS_DIR . '/partials/header.php';?>
    <title>Déconnexion</title>
</head>
<body>
    <!-- Inclusion du menu -->
    <?php  include VIEWS_DIR . '/partials/menu.php';?>


    <!-- Grille Bootstrap avec le contenu principal de la page -->
    <div class="container">

        <!-- Titre h1 -->
        <div class="row my-5">
            <div class="col-12">
                <h1 class=text-center>Déconnexion</h1>
            </div>
        </div>

        <!-- Contenu -->
        <div class="row">

          <p class="text-center alert alert-warning fw-bold">Vous avez bien été déconnecté de votre compte !</p>

            <div class="col-12 ">
                <!-- Contenu -->
                <div class="row">

                    <div class="col-12 col-md-6 mx-auto">

                        <form action="<?= PUBLIC_PATH ?>/connexion/" method="POST">




    <!-- Inclusion du contenu du fichier header.php -->
    <?php  include VIEWS_DIR . '/partials/footer.php';?>
</body>
</html>

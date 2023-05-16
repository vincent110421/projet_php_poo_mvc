<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Inclusion du contenu du fichier header.php -->
<?php  include VIEWS_DIR . '/partials/header.php';?>
    <title>Inscription</title>
</head>
<body>
    <!-- Inclusion du menu -->
    <?php  include VIEWS_DIR . '/partials/menu.php';?>


    <!-- Grille Bootstrap avec le contenu principal de la page -->
    <div class="container">

        <!-- Titre h1 -->
        <div class="row my-5">
            <div class="col-12">
                <h1 class=text-center>Inscription</h1>
            </div>
        </div>

        <!-- Contenu -->
        <div class="row">

            <?php

            // Affichage message de succès s'il existe, sinon affichage formulaire
            if(isset($success)){
                ?>
                <div class="alert alert-success text-center fw-bold"><?= $success ?></div>

                <?php

                } else {

                ?>






            <div class="col-12 ">
                <!-- Contenu -->
                <div class="row">

                    <div class="col-12 col-md-6 mx-auto">

                        <form action="<?= PUBLIC_PATH ?>/creer-un-compte/" method="POST">

                            <?php
                            // Affichage des erreurs s'il y en a
                            if(isset($errors)){
                                foreach ($errors as $error){
                                echo'<div class="alert alert-danger">' . $error . '</div>';
                                }
                            }
                            ?>


                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input name="email" id="email" class="form-control" type="text">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Mot de passe</label>
                                <input name="password" id="password" class="form-control" type="password">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="confirm-password">Confirmation du mot de passe</label>
                                <input name="confirm-password" id="confirm-password" class="form-control" type="password">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="firstname">Prénom</label>
                                <input name="firstname" id="firstname" class="form-control" type="text">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="lastname">Nom de famille</label>
                                <input name="lastname" id="lastname" class="form-control" type="text">
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100 btn-lg">
                            </div>

                        </form>

                    </div>

                </div>


            </div>
            <?php
        }
        ?>
        </div>

    </div>


    <!-- Inclusion du contenu du fichier header.php -->
    <?php  include VIEWS_DIR . '/partials/footer.php';?>
</body>
</html>

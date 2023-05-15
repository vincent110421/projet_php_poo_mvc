<?php
// Ce fichier est le contrôleur frontal, qui chargera tout le site web et ses composants

// Inclusion des vendors installées avec composer
require __DIR__ . '/../vendor/autoload.php';

// Inclusion du fixchier contenant les fonctions et configuarations générales du site

require __DIR__ . '/../configs/functions.php';

// Inclusion du fichier contenant les paramètres personnalisables du site (comme les accès BDD par exemple )
require __DIR__ . '/../configs/params.php';


try{
    // Inclusion du fichier qui contient toutes les routes (URLs du site ) et qui chargera le contrôleur de chajque route
    require __DIR__ . '/../configs/routes.php';

} catch(Throwable $e){

    // Affichage personnalisé sympa de nos erreurs PHP
    ?>

    <div style="background-color: #0aa6f9; padding: 15px;">
        <h1><b>Erreur PHP !</b></h1>
        <hr>
        <p><b>Fichier</b> : <?= $e->getFile() ?></p>
        <p><b>Ligne</b> : <?= $e->getLine() ?></p>
        <p><b>Message</b> : <?= $e->getMessage() ?></p>
        <hr>
        <?php

        // Affichage de la pile d'erreur dans un dump au cas où on aurait besoin de détails sur l'erreur affichée
        dump( $e->getTrace() );

        ?>
    </div>

    <?php

}
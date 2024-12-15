<?php

// Faire une fonction qui permet d'avoir le chemin absolu d'un fichier en fonction de son chemin relatif depuis n'importe quel fichier du projet
// ex: getAbsolutePath('../../resources/img/logo.png') dans le fichier src/components/header.php => resources/img/logo.png



$themes = array(
    "light" => array(
        "header" => array(
            "background" => "#D5EAF2"
        ),
        "background" => "#CEE2EA",
        "text" => "#011126"
    ),
    "dark" => array(
        "background" => "#343a40",
        "text" => "#f8f9fa",
        "primary" => "#007bff",
        "secondary" => "#6c757d",
        "success" => "#28a745",
        "danger" => "#dc3545",
        "warning" => "#ffc107",
        "info" => "#17a2b8",
        "light" => "#f8f9fa",
        "dark" => "#343a40"
    )
);

$theme = $themes["light"];

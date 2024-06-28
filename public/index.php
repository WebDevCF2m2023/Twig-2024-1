<?php

// chemin vers Twig
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// chargement de l'autoload
require_once '../vendor/autoload.php';

// chemin vers les templates twig
$loader = new FilesystemLoader('../view/');
// création d'une instance de $twig
$twig = new Environment($loader, [
    'cache' => false, // pas de cache en dev
    // 'cache' => '/path/to/compilation_cache', // chemin du cache pour la prod
    // activation du debug en dev
    'debug' => true,
]);

$array = [
    "un",
    "deux",
    "trois","quatre","cinq","six","sept",
];

// Appel de la vue de test
// echo $twig->render('test.html.twig', ['chiffres' => $array]);
echo $twig->render('publicView/homepage.html.twig', ['chiffres' => $array]);
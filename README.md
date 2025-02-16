# Twig-2024-1
Moteur de template

## Installation

Installez d'abord composer :

https://getcomposer.org/download/

Et vérifiez la version de PHP

```bash
php -v
```

Puis la version de composer

```bash
composer -v
```

### Site officiel de Twig

https://twig.symfony.com/

Pour l'installer :

```bash
composer require "twig/twig:^3.0"
```

N'oubliez pas d'ajouter `vendor` dans votre `.gitignore`

### Activation

```php
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
echo $twig->render('test.html.twig', ['chiffres' => $array]);
```
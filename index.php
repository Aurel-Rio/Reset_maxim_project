<!DOCTYPE html>
<html>
<head>
    <title>Ma page</title>
    <!-- Vos balises meta, liens CSS et autres éléments du head -->
</head>
<body>
    <!-- Inclure la barre de navigation -->
    <?php include 'components/navbar.php'; ?>

    <!-- Le contenu de votre page -->
    <?php
    // Récupérer l'URL actuelle
    $request = rtrim($_SERVER['REQUEST_URI'], '/');
    var_dump($request);

    // Définir les routes
    // Définir les routes
$routes = [
    '/Maxim/' => 'pages/accueil.php',
    '/Maxim/gallery/' => 'pages/gallery.php',
    '/Maxim/expositions/' => 'pages/expositions.php',
    '/Maxim/contact/' => 'pages/contact.php',
];

    // Vérifier si la route existe dans le tableau
    if (array_key_exists($request, $routes)) {
        // Inclure le fichier correspondant à la route
        include $routes[$request];
    } else {
        // Route non trouvée, afficher une erreur 404
        header('HTTP/1.0 404 Not Found');
        echo 'Page non trouvée.';
    }
    ?>

    <!-- Vos autres éléments de contenu -->

</body>
</html>
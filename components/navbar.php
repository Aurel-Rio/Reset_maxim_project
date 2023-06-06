<!DOCTYPE html>
<html>
<head>
    <title>Ma page</title>
    <!-- Vos balises meta, liens CSS et autres éléments du head -->
</head>
<body>
    <?php
    // Récupérer l'URL actuelle
    $request = rtrim($_SERVER['REQUEST_URI'], '/');

    // Définir les liens de navigation avec classe active
    $links = [
        '/Maxim/' => 'Accueil',
        '/Maxim/gallery/' => 'Galerie',
        '/Maxim/expositions/' => 'Expositions',
        '/Maxim/contact/' => 'Contact',
    ];
    ?>

    <nav>
        <ul>
            <?php foreach ($links as $url => $label) : ?>
                <li <?php echo ($request === $url) ? 'class="active"' : ''; ?>><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice 3</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <h1>Exercice 3</h1>
            <a href="http://exephpp9/">Index</a>
        </nav>
        <p>
            <?php
            // set de la langue
            setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
            echo strftime('%A %d %B %Y');
            ?>
        </p>
    </body>
</html>

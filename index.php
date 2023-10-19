<?php
include __DIR__ . '/db.php';
include __DIR__ . '/models.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <h1>Titolo:
        <?= $spiderman->getTitle() ?>
    </h1>
    <p>Durata:
        <?= $spiderman->duration ?>
        minuti
    </p>
    <p>Genere:
        <?= $spiderman->genre ?>
    </p>



    <h1>Titolo:
        <?= $batman->getTitle() ?>
    </h1>
    <p>Durata:
        <?= $batman->duration ?>
        minuti
    </p>
    <p>Genere:
        <?= $batman->genre ?>
    </p>

</body>

</html>
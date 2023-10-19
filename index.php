<?php
class Movie
{
    public $title;
    public $genre;
    public $duration;

    function __construct($_title)
    {
        $this->title = $_title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$spiderman = new Movie('Spiderman');
$spiderman->genre = 'adventure';
$spiderman->duration = 150;

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
    </p>
    <p>Genere:
        <?= $spiderman->genre ?>
    </p>

</body>

</html>
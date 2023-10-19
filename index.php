<?php

define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

include ROOT  . DS . 'models.php';
include ROOT  . DS . 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid text-center p-5">

        <h1>Movie List OOP</h1>

        <div class="container text-start mt-5">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Actors</th>
                        <th scope="col">Genres</th>
                        <th scope="col">Duration</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($movieList as $movie) : ?>
                        <tr class="text-capitalize">

                            <!-- title -->
                            <td> <?= $movie->title ?> </td>

                            <!-- actors -->
                            <td>
                                <?php foreach ($movie->actors as $actor) {
                                    echo $actor . ' ';
                                } ?>
                            </td>
                            <!-- genres -->
                            <td>
                                <?php foreach ($movie->genres as $genre) {
                                    echo $genre . ' ';
                                } ?>
                            </td>

                            <!-- duration -->
                            <td><?= $movie->duration ?> minuti</td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
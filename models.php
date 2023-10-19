<?php

$movieList = [
    $film_1 = new Movies('Spiderman'),
    $film_2 = new Movies('Batman'),
];



$film_1->addGenre('adventure');
$film_1->duration = 150;
$film_1->addGenre('heroes');
$film_1->addActor('tom holland');


$film_2->addGenre('action');
$film_2->addGenre('thriller');
$film_2->addGenre('adventure');
$film_2->duration = 210;
$film_2->addActor('cristian bale');

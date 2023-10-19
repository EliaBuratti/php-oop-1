<?php


$spiderman = new Movies('Spiderman');
$spiderman->addGenre('adventure');
$spiderman->duration = 150;

$batman = new Movies('Batman');
$batman->addGenre('action');
$batman->addGenre('thriller');
$batman->addGenre('adventure');
$batman->duration = 210;

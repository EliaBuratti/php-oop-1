<?php

include __DIR__ . '/models.php';

$moviesList = [];


class Movies
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

    public function addGenre($_genre)
    {
        if ($this->genre) {

            $this->genre .= ', ' . $_genre;
        } else {
            $this->genre .= '' . $_genre;
        }
    }
};

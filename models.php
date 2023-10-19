

<?php

include __DIR__ . '/db.php';

class Movies
{
    public $title;
    public $actors = [];
    public $genres = [];
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
        array_push($this->genres, $_genre);
    }
    public function addActor($_actors)
    {
        array_push($this->actors, $_actors);
    }
};

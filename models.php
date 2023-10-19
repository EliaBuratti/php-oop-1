

<?php

include __DIR__ . '/db.php';

class Movies
{
    public $title;
    public $actors;
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
    public function addActor($_actors)
    {
        if ($this->actors) {

            $this->actors .= ', ' . $_actors;
        } else {
            $this->actors .= '' . $_actors;
        }
    }
};

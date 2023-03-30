<?php

class Movie {
    public string $title;
    public string $directorFirstName;
    public string $directorLastName;
    public int $year;
    public string $genre;
    public float $rating;

    function __construct($_title) {
        $this->title = $_title;
    }
}

?>
<?php


class Movie {
    public string $title;
    public string $directorFirstName;
    public string $directorLastName;
    public int $year;
    public $genre;
    public float $rating;
    public static $availableGenre =['Animazione', 'Commedia', 'Avventura', 'Horror', 'Drammatico', 'Romantico', 'Documentario', 'Biografico', 'Sportivo'];

    function __construct($_title) {
        $this->title = $_title;
    }

    function getDirectorFullName() {
        return $this->directorFirstName . " " . $this->directorLastName;
    }

    function getRoundRating() {
        return round($this->rating);
    }

}
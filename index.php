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

    function getDirectorFullName() {
        return $this->directorFirstName . " " . $this->directorLastName;
    }

}

$movie1 = new Movie("Space Jam");
$movie1->directorFirstName = "Joe";
$movie1->directorLastName = "Pytka";
$movie1->year = 1996;
$movie1->genre = "Animazione";
$movie1->rating = 6.5;
var_dump($movie1);
var_dump($movie1->getDirectorFullName());

$movie2 = new Movie("Space Jam 2 - New Legends");
$movie2->directorFirstName = "Malcom D.";
$movie2->directorLastName = "Lee";
$movie2->year = 2021;
$movie2->genre = "Animazione";
$movie2->rating = 4.5;
var_dump($movie2);
var_dump($movie2->getDirectorFullName());


?>
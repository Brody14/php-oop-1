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
//var_dump($movie1);
//var_dump($movie1->getDirectorFullName());

$movie2 = new Movie("Space Jam 2 - New Legends");
$movie2->directorFirstName = "Malcom D.";
$movie2->directorLastName = "Lee";
$movie2->year = 2021;
$movie2->genre = "Animazione";
$movie2->rating = 4.5;
//var_dump($movie2);
//var_dump($movie2->getDirectorFullName());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
</head>
<style>
    ul,
    ol {
        list-style: none;
    }
</style>
<body>

    <header>
        <h1>Movies</h1>
    </header>

    <main>
        <ul>
            <h2><?= $movie1->title; ?></h2>
            <li>
                <strong>Regia:</strong> <?= $movie1->getDirectorFullName();  ?>
            </li>
            <li>
                <strong>Anno:</strong> <?= $movie1->year; ?>
            </li>
            <li>
                <strong>Genere:</strong> <?= $movie1->genre; ?>
            </li>
            <li>
                <strong>Valutazione:</strong> <?= $movie1->rating; ?>/10
            </li>
        </ul>

        <ul>
            <h2><?= $movie2->title; ?></h2>
            <li>
                <strong>Regia:</strong> <?= $movie2->getDirectorFullName();  ?>
            </li>
            <li>
                <strong>Anno:</strong> <?= $movie2->year; ?>
            </li>
            <li>
                <strong>Genere:</strong> <?= $movie2->genre; ?>
            </li>
            <li>
                <strong>Valutazione:</strong> <?= $movie2->rating; ?>/10
            </li>
        </ul>
    </main>


    
</body>
</html>
<?php

require_once __DIR__. './models/movie.php';

$movie1 = new Movie("Space Jam");
$movie1->directorFirstName = "Joe";
$movie1->directorLastName = "Pytka";
$movie1->year = 1996;
$movie1->genre = Movie::$availableGenre[0] . ', ' .  Movie::$availableGenre[1] . ', ' . Movie::$availableGenre[2];
$movie1->rating = 6.5;

$movie2 = new Movie("Space Jam 2 - New Legends");
$movie2->directorFirstName = "Malcom D.";
$movie2->directorLastName = "Lee";
$movie2->year = 2021;
$movie2->genre =  Movie::$availableGenre[0] . ', ' .  Movie::$availableGenre[1] . ', ' . Movie::$availableGenre[2];
$movie2->rating = 4.5;

$movie3 = new Movie("Coach Carter");
$movie3->directorFirstName = "Thomas";
$movie3->directorLastName = "Carter";
$movie3->year = 2005;
$movie3->genre = Movie::$availableGenre[4] . ', ' .  Movie::$availableGenre[7] . ', ' . Movie::$availableGenre[8];
$movie3->rating = 7.3;

$movie4 = new Movie("Kobe: Una Storia Italiana");
$movie4->directorFirstName = "Jesus Garces";
$movie4->directorLastName = "Lambert";
$movie4->year = 2022;
$movie4->genre = Movie::$availableGenre[6] . ', ' .  Movie::$availableGenre[7];
$movie4->rating = 7.6;
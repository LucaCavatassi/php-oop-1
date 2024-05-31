<?php
require_once "Models/movies.php";
require_once "Models/genre.php";

// CREO ISTANZA GENERE
$genre1 = new Genre("Drama");
$genre2 = new Genre("Thriller");
$genre3 = new Genre("Action");
$genre4 = new Genre("Horror");

// CREO ISTANZA FILM 1
$movie1 = new Movie("Mystic River", "Franchino", "Nolan", $genre2);
$movie1->setDuration(180);

var_dump($movie1);

// CREO ISTANZA FILM 2
$movie2 = new Movie("L.A. Confidential", "Renato", "Pozzetto", $genre4);
$movie2->setDuration(120);

var_dump($movie2);

// CREO ISTANZA FILM 3
$movie3 = new Movie("La frode", "Richie", "Hawtin", $genre1);
$movie3->setDuration(90);

var_dump($movie3);

// CREO ISTANZA FILM 4
$movie4 = new Movie("John Wick", "Keanu Reeves", "Ari Aster", $genre3);
$movie4->setDuration(110);

var_dump($movie4);


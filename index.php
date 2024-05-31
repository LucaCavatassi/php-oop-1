<?php
require_once "Models/movies.php";
require_once "Models/genre.php";

// CREO ISTANZA GENERE
$genre1 = new Genre("Drama");
$genre2 = new Genre("Thriller");
$genre3 = new Genre("Action");
$genre4 = new Genre("Horror");

// CREO ISTANZA FILM 1
$movie1 = new Movie("Mystic River", $genre2);
$movie1->setDuration(180);
$movie1->setDirector("Franchino");
$movie1->setWriter("Nolan");
$movie1->setCast("luca", "main");
$movie1->setCast("olga", "main");
$movie1->setCast("loris", "supporting");
$movie1->setCast("luca", "supporting");




echo $movie1->name, "<br>" , $movie1->getDuration(), "<br>", $movie1->getDirector(), "<br>",$movie1->getWriter(), "<hr>";


// CREO ISTANZA FILM 2
$movie2 = new Movie("L.A. Confidential", $genre4);
$movie2->setDuration(120);
$movie2->setDirector("Renato");
$movie2->setWriter("Pozzetto");
$movie2->setCast("luca", "main");
$movie2->setCast("olga", "main");
$movie2->setCast("loris", "supporting");
$movie2->setCast("luca", "supporting");

// var_dump($movie2->name, $movie2->getDuration(), $movie2->getDirector(), $movie2->getWriter());
echo $movie2->name, "<br>" , $movie2->getDuration(), "<br>", $movie2->getDirector(), "<br>",$movie2->getWriter(), "<hr>";


// CREO ISTANZA FILM 3
$movie3 = new Movie("La frode", $genre1);
$movie3->setDuration(90);
$movie3->setDirector("Richie");
$movie3->setWriter("Hawtin");
$movie3->setCast("luca", "main");
$movie3->setCast("olga", "main");
$movie3->setCast("loris", "supporting");
$movie3->setCast("luca", "supporting");

// var_dump($movie3->name, $movie3->getDuration(), $movie3->getDirector(), $movie3->getWriter());
echo $movie3->name, "<br>" , $movie3->getDuration(), "<br>", $movie3->getDirector(), "<br>",$movie3->getWriter(), "<hr>";


// CREO ISTANZA FILM 4
$movie4 = new Movie("John Wick", $genre3);
$movie4->setDuration(110);
$movie4->setDirector("Keanu Reeves");
$movie4->setWriter("Ari Aster");
$movie4->setCast("luca", "main");
$movie4->setCast("olga", "main");
$movie4->setCast("loris", "supporting");
$movie4->setCast("luca", "supporting");

// var_dump($movie4->name, $movie4->getDuration(), $movie4->getDirector(), $movie4->getWriter());
echo $movie4->name, "<br>" , $movie4->getDuration(), "<br>", $movie4->getDirector(), "<br>",$movie4->getWriter(), "<hr>";


var_dump($movie1);
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
$movie1->setDirector("Clint Eastwood");
$movie1->setWriter("Dennis Lehane");
$movie1->setCast("Sean Penn", "main");
$movie1->setCast("Tim Robins", "main");
$movie1->setCast("Kevin Bacon", "supporting");
$movie1->setCast("Laurence Fishburne", "supporting");

echo $movie1->name,
    "<br>" , 
    $movie1->getDuration(), 
    "<br>",
    $movie1->getDirector(), 
    "<br>",
    $movie1->getWriter(),
    "<br>",
    "<br>",
    "<strong> Cast </strong>",
    "<br>",
    $movie1->getCast(),
    "<hr>";


// // CREO ISTANZA FILM 2
$movie2 = new Movie("L.A. Confidential", $genre4);
$movie2->setDuration(120);
$movie2->setDirector("Curtis Hanson");
$movie2->setWriter("James Ellroy");
$movie2->setCast("Russel Crowe", "main");
$movie2->setCast("Kevin Spacey", "main");
$movie2->setCast("Guy Pearce", "supporting");
$movie2->setCast("Kim Basinger", "supporting");

echo $movie2->name,
    "<br>" , 
    $movie2->getDuration(), 
    "<br>",
    $movie2->getDirector(), 
    "<br>",
    $movie2->getWriter(),
    "<br>",
    "<br>",
    "<strong> Cast </strong>",
    "<br>",
    $movie2->getCast(),
    "<hr>";


// // CREO ISTANZA FILM 3
$movie3 = new Movie("Interstellar", $genre1);
$movie3->setDuration(90);
$movie3->setDirector("Christoper Nolan");
$movie3->setWriter("Christoper Nolan");
$movie3->setCast("Matthew McConaughey", "main");
$movie3->setCast("Anne Hathaway", "main");
$movie3->setCast("Jessica Chastain", "supporting");
$movie3->setCast("Michael Caine", "supporting");

echo $movie3->name,
    "<br>" , 
    $movie3->getDuration(), 
    "<br>",
    $movie3->getDirector(), 
    "<br>",
    $movie3->getWriter(),
    "<br>",
    "<br>",
    "<strong> Cast </strong>",
    "<br>",
    $movie3->getCast(),
    "<hr>";

// CREO ISTANZA FILM 4
$movie4 = new Movie("John Wick", $genre3);
$movie4->setDuration(110);
$movie4->setDirector("Chad Stahelskis");
$movie4->setWriter("Derek Kolstad");
$movie4->setCast("Keanu Reeves", "main");
$movie4->setCast("Michael Nyqvist:", "main");
$movie4->setCast("Willem Dafoe", "supporting");
$movie4->setCast("Alfie Allen", "supporting");

echo $movie4->name,
    "<br>" , 
    $movie4->getDuration(), 
    "<br>",
    $movie4->getDirector(), 
    "<br>",
    $movie4->getWriter(),
    "<br>",
    "<br>",
    "<strong> Cast </strong>",
    "<br>",
    $movie4->getCast(),
    "<hr>";